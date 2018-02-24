<?php

class footer {

	public static function render() {
		$base_url = '/' . template::base();
		return <<<ENDHTML
<footer id="colophon">
<a href="$base_url/contact">contact</a>
</footer>
ENDHTML;
	}

}

?>
