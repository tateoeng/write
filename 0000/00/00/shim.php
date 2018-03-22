<?php
// Install PSR-4-compatible class autoloader
spl_autoload_register(function($class){
	require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php'; });

// Get Markdown class
use Michelf\Markdown;

date_default_timezone_set('America/New_York');

// Read file and pass content through the Markdown parser
$p    = 'http://localhost/journal' . date('/Y/m/d/') . 'index.md' ;
$text = file_get_contents($p);

$html = Markdown::defaultTransform($text);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tate's Journal</title>
				<script type="text/x-mathjax-config">
				  MathJax.Hub.Config({ tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}});</script>
				<script type="text/javascript" src="MathJax/MathJax.js?config=TeX-AMS_HTML-full"></script>
				<link rel="stylesheet" type="text/css" href="http://localhost/style.css" /></head>

    <body>
			<div id="content">
				<?php echo $html; ?></div></body></html>