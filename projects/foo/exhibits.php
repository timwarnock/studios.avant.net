<?php

define("ARTWORK_URL", "http://avant.net/artwork");

class exhibits extends template {

	public function __construct() {
		## delegate to proper page:
		$path_array = explode('/', trim($_REQUEST['loc'], '/'));

		## all exhibits
		if ( count($path_array) == 1 && $path_array[0] == 'exhibits') {
			$page = new exhibits_all();
			self::$html = $page::$html;

		## one exhibit (view all items)
		} elseif ( count($path_array) == 2 ) {
			$page = new exhibits_one( $path_array[1] );
			self::$html = $page::$html;

		## one item (buy this item)
		} elseif ( count($path_array) > 2 ) {
			$page = new exhibits_item( $path_array[1], $path_array[2] );
			self::$html = $page::$html;
		}
	}

	public function art_url() {
		return ARTWORK_URL;
	}

	public function artwork_json() {
		return file_get_contents(ARTWORK_URL . '/json');
	}

	public function artwork() {
		return json_decode( $this->artwork_json(), true );
	}

}

?>
