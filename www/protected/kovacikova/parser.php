<?php

$filename = 'flash.swf';
if (file_exists($filename)) {
} else {
    exec('gs -dNOPAUSE -sDEVICE=jpeg -r96 -dNumRenderingThreads=2 -dNOGC -sOutputFile=str%03d.jpg *.pdf', $retval);
    exec('jpeg2swf -o temp.swf *.jpg');
    exec('swfcombine -o flash.swf ../rfxview.swf viewport=temp.swf');
    exec('rm temp.swf *.jpg');
}

header('Content-type: application/x-shockwave-flash');
$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
$open = file_get_contents("flash.swf",false,$context);
echo $open;
exit();
?>