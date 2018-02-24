<?php

class exhibits_all extends exhibits {

	public function __construct() {
		self::$title = 'Exhibits - Anatta Studios';
		$base = self::base();
		$artwork = $this->artwork();
		$exhibits = '';
		foreach( $artwork as $ex ) {
			$exhibits .= <<<ENDHTML
				<p><a href="/$base/exhibits/$ex[name]">$ex[title]</a></p>
ENDHTML;
		}
		self::$html = " All the exhibits! $exhibits ";
	}

}

?>
