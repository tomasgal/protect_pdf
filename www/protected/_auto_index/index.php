<html><body><h1>Nahlad zaverecnej prace</h1></body></html> 

<?php 
exec('gs -dNOPAUSE -sDEVICE=jpeg -r60 -sOutputFile=str%03d.jpg *.pdf &');
$format = '<img src="[FILE]"><br>';
chdir(dirname(__FILE__));
$files = glob("*.jpg", GLOB_BRACE);
foreach ($files as $file) {if (is_file($file)) {echo str_replace('[FILE]',htmlspecialchars($file), $format);}}
?>
