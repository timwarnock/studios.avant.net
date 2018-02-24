<?php

class exhibits_item extends exhibits {

	public function __construct( $exhibit, $item ) {
		$base_url = '/' . self::base();
		$artwork = $this->artwork();
		$art = $artwork[$exhibit]['artwork'][$item];
		$art_url = $this->art_url();
		$art_title = $art['title'];
		$art_desc = count($art['desc']) > 0 ? $art['desc'] : '';

		## redirect if non-existent item
		if (! $art ) {
			header("Location: http://$_SERVER[HTTP_HOST]$base_url/exhibits/$exhibit");
			exit;
		}
		self::$title = "$art[title] - Anatta Studios";
		self::$html = <<<ENDHTML
<img src="$art_url/$exhibit/img_$item" />
<br />
$art_title
<br />
$art_desc
<br />
I have $base_url/$exhibit/$item, buy this item (if it's for sale)
ENDHTML;
	}

}

?>
