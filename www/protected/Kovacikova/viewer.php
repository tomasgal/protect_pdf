<?php

$filename = 'flash.swf';
if (file_exists($filename)) {
} else { exec('pdftk *.pdf cat output out.pdf && pdf2swf out.pdf -o flash.swf -f -s breakonwarning -s jpegquality=50 -s subpixels=1 -T 9 -t  || pdf2swf out.pdf -o flash.swf -f -s jpegquality=50 -s subpixels=1 -s poly2bitmap -T 9 -t'); }
?>

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
            { config : {

                SWFFile : 'flash.swf',

                Scale : 1,
                ZoomTransition : 'linear',
                ZoomTime : 0.5,
                ZoomInterval : 0.2,
                FitPageOnLoad : false,
                FitWidthOnLoad : true,
                FullScreenAsMaxWindow : false,
                ProgressiveLoading : true,
                MinZoomSize : 0.2,
                MaxZoomSize : 5,
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
                localeChain: 'en_US'
            }}
    );
</script>


<script type="text/javascript">
    var url = window.location.href.toString();
    if(location.length==0){url = document.URL.toString();}
</script>
</body>
</html>