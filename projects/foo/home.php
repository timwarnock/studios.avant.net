<?php

class home extends template {

	public function __construct() {
		$base_url = '/' . self::base();
		$exhibits = new exhibits();
		$artwork = $exhibits->artwork();
		$art_len = count($artwork);

		#print_r($artwork);
		self::$html = <<<ENDHTML
<a href="$base_url/exhibits">exhibits</a> ... $art_len
ENDHTML;
	}

}

?>
