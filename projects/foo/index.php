<?php
##
# studios.avant.net
# 
# front-controller with auto-loader templates
# by tim@timwarnock.com
#
##

## init auto-loader
spl_autoload_register();

## front-controller: set valid locations
$valid = array( 'home' => 1
  , 'exhibits' => 1
  , 'help' => 1
  , 'contact' => 1
);
$path_array = explode('/', trim($_REQUEST['loc'], '/'));
$q = $path_array[0];
$loc = array_key_exists($q, $valid) ? $q : 'home';

## load and buffer the page (do this before printing anything)
$page = new $loc();

## print the page
print $page::render();

?>
