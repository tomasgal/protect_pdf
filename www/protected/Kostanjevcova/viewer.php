<?php
$filename = 'flash.swf';
if (file_exists($filename)) {
} else { exec('pdf2swf *.pdf -o flash.swf -f -s breakonwarning -s jpegquality=94 -s subpixels=1 -T 9 -t -z || pdf2swf *.pdf -o flash.swf -s jpegquality=94 -s subpixels=1 -s poly2bitmap -T 9 -t -z'); }
?>

<html>
<head>
    <title>FlexPaper</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />
    <style type="text/css" media="screen">
        html, body	{ height:99%; }
        body { margin:0; padding:0; overflow:inherit; }
        #flashContent { display:none; }
    </style>

    <link rel="stylesheet" type="text/css" href="css/flexpaper.css" />
    <script type="text/javascript" src="/jquery.min.js"></script>
    <script type="text/javascript" src="/flexpaper.js"></script>
    <script type="text/javascript" src="/flexpaper_handlers.js"></script>
</head>
<body>
<div style="position:absolute;left:10px;top:10px;">
<div id="documentViewer" class="flexpaper_viewer"
style="width:610px;height:866px"></div>

<script type="text/javascript">

    var startDocument = "Paper";
    $('#documentViewer').FlexPaperViewer(
            { config : {

                SWFFile : 'flash.swf',

                Scale : 1,
                ZoomTransition : 'linear',
                ZoomTime : 0.5,
                ZoomInterval : 0.2,
                FitPageOnLoad : false,
                FitWidthOnLoad : false,
                FullScreenAsMaxWindow : false,
                ProgressiveLoading : true,
                MinZoomSize : 0.2,
                MaxZoomSize : 0.9,
                SearchMatchAll : false,
                InitViewMode : 'Portrait',
                RenderingOrder : 'flash',
                StartAtPage : '',
                ViewModeToolsVisible : true,
                ZoomToolsVisible : true,
                NavToolsVisible : true,
                CursorToolsVisible : true,
                SearchToolsVisible : true,
                WMode : 'window',
                localeChain: 'sk_SK'
            }}
    );
</script>


<script type="text/javascript">
    var url = window.location.href.toString();
    if(location.length==0){url = document.URL.toString();}
</script>
</body>
</html>