<?php
function ping($host)
{
  exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
  return $rval === 0;
}
$host = '192.168.1.5';
$up = ping($host);
$page = $_SERVER['PHP_SELF'];
$sec = "10";

echo '<img src="'.($up ? 'on' : 'off').'.jpg" alt="'.($up ? 'UP' : 'NO').'" />';
echo " WD Cloud";
?>

<html><head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 </head>
 <body></body>
</html>
