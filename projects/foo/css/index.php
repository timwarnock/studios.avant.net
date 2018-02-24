<?php
  header("Content-type: text/css; charset=UTF-8");

  ## return css files as one
  $css = file_get_contents('html_reset.css');
  $css .= file_get_contents('html.css');
  $css .= file_get_contents('framework.css');
  $css .= file_get_contents('content.css');
  
  print $css;


?>
