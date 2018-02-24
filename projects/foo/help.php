<?php

class help extends template {

	public function __construct() {
		phpinfo(); exit;
		self::$html = " help me ";
	}

}

?>
