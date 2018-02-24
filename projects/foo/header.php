<?php

class header {

	public static function render() {
		$base_url = '/' . template::base();
		return <<<ENDHTML
<header id="branding">
<a href="$base_url">home</a>
Anatta Studios
<a href="$base_url/help">help</a>
</header>
ENDHTML;
	}

}

?>
