<?php
require 'HmlElement.php';
require 'Htmlrenderer.php';

$link = new HtmlElement('a', ['href=http://www.google.com.mx'], 'Google');
echo "\n";
$renderer = new Htmlrenderer();
echo $renderer->render($link);
echo "\n";
echo $link->tag;
echo "\n";
$link->content ='yahoo';
echo "\n";
echo $renderer->render($link);

?>