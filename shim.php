<?php
// Install PSR-4-compatible class autoloader
spl_autoload_register(function($class){
	require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php'; });

// Get Markdown class
use Michelf\Markdown;

date_default_timezone_set('America/New_York');

// Read file and pass content through the Markdown parser
$p    = 'http://localhost/journal' . date('/Y/m/d/') . 'index.md' ;
$a    = 'http://localhost/' . 'archive.md' ;
$text = file_get_contents($p);
$text2 = file_get_contents($a);

$html = Markdown::defaultTransform($text);
$html2 = Markdown::defaultTransform($text2);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({ tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}});</script>
        <script type="text/javascript" src="MathJax/MathJax.js?config=TeX-AMS_HTML-full"></script>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css" /></head>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <body>
	<div id="content">
	<?php echo $html; ?>
	<?php echo $html2; ?></div></body></html>
