<?php

class exhibits_one extends exhibits {

	public function __construct( $exhibit ) {
		$base_url = '/' . self::base();
		$art_url = $this->art_url();
		$artwork = $this->artwork();
		$ex = $artwork[$exhibit];

		## redirect if exhibit doesn't exist
		if (! $ex ) {
			header("Location: http://$_SERVER[HTTP_HOST]$base_url/exhibits/");
			exit;
		}
		$items = '';
		foreach($ex['artwork'] as $art) {
			$items .= <<<ENDHTML
<br />
<img src="$art_url/$exhibit/small_img_$art[filename]" />
<br />$art[date] <a href="$base_url/exhibits/$exhibit/$art[filename]">$art[filename]</a> : $art[title]
ENDHTML;
		}
		self::$title = "$ex[title] - Anatta Studios";
		self::$html = "$ex[title] <br />$ex[desc]$items";
	}

}

?>
