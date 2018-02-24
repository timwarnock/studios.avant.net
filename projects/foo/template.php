<?php

class template {

	# abstract, implemented for each template
	public static $html = '';
	public static $title = 'Anatta Studios';

	# retrieve the base url (for versioning)
	public static function base() {
		return dirname(trim($_SERVER['SCRIPT_NAME'],'/'));
		$path_array = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
		return $path_array[0];
	}

	# return the full page html
	public static function render() {
		$base_url = '/' . self::base();
		$title = self::$title;
		$header = header::render();
		$footer = footer::render();
		$page = self::$html;
		return <<<ENDHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>$title</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="$base_url/css/" />
<!--[if lt IE 9]>
<script src="$base_url/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<div id="page">
$header
$page
$footer
</div><!-- id="page" -->
</body>
</html>
ENDHTML;
	}
}

?>
