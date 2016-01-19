<?php
$filename = 'flash.swf';
if (file_exists($filename)) {
} else { exec('pdftk *.pdf cat output out.pdf && pdf2swf out.pdf -o flash.swf -f -s breakonwarning -s jpegquality=50 -s subpixels=1 -T 9 -t  || pdf2swf out.pdf -o flash.swf -f -s jpegquality=50 -s subpixels=1 -s poly2bitmap -T 9 -t'); 
exec('rm -f out.pdf');}?>

<html>
<head>
    <title>FlexPaper</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />
    <style type="text/css" media="screen">
        html, body	{ height:100%; }
        body { margin:0; padding:0; overflow:auto; }
        #flashContent { display:none; }
    </style>

    <link rel="stylesheet" type="text/css" href="css/flexpaper.css" />
    <script type="text/javascript" src="/jquery.min.js"></script>
    <script type="text/javascript" src="/flexpaper.js"></script>
    <script type="text/javascript" src="/flexpaper_handlers.js"></script>
</head>
<body>
<div style="position:absolute;left:4px;top:4px;"><div id="documentViewer" class="flexpaper_viewer"style="width:632px;height:874px"></div>
<script type="text/javascript">

    var startDocument = "Paper";
    $('#documentViewer').FlexPaperViewer(
            { config : { SWFFile : 'flash.swf', Scale : 1, ZoomTransition : 'linear', ZoomTime : 0.1, ZoomInterval : 0.1, FitPageOnLoad : false, FitWidthOnLoad : true,
                FullScreenAsMaxWindow : false, ProgressiveLoading : true, MinZoomSize : 0.1, MaxZoomSize : 3.5, SearchMatchAll : false, InitViewMode : 'Portrait',
                RenderingOrder : 'flash', StartAtPage : '', ViewModeToolsVisible : true, ZoomToolsVisible : true, NavToolsVisible : true, CursorToolsVisible : true,
                SearchToolsVisible : true, WMode : 'window', localeChain: 'sk_SK'}}
    );
</script>


<script type="text/javascript">
    var url = window.location.href.toString();

    if(location.length==0){
        url = document.URL.toString();
    }

    if(url.indexOf("file:")>=0){
        jQuery('#documentViewer').html("<div style='position:relative;background-color:#ffffff;width:420px;font-family:Verdana;font-size:10pt;left:22%;top:20%;padding: 10px 10px 10px 10px;border-style:solid;border-width:5px;'><img src='http://flexpaper.devaldi.com/resources/warning_icon.gif'>&nbsp;<b>You are trying to use FlexPaper from a local directory.</b><br/><br/> FlexPaper needs to be copied to a web server before the viewer can display its document properlty.<br/><br/>Please copy the FlexPaper files to a web server and access the viewer through a http:// url.</div>");
    }
</script>
</body>
</html>