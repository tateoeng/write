<?php
// Install PSR-4-compatible class autoloader
spl_autoload_register(function($class){
	require str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php'; });

// Get Markdown class
use Michelf\Markdown;

date_default_timezone_set('America/New_York');

// Read file and pass content through the Markdown parser
$pth  = realpath('.') . PHP_EOL;
$qth  = explode("\\", $pth);
$y    = $qth[9];
$m    = $qth[10];
$d    = trim($qth[11]);
$y    .= '/' . $m . '/' . $d;
$p    = 'http://localhost/journal/' . $y . '/index.md' ;
$text = file_get_contents($p);

$html = Markdown::defaultTransform($text);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css" /></head>
    <body>
	<div id="content">
	<?php echo $html; ?></div></body></html>
						
