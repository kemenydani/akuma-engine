<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS - FONTAWESOME -->
    <link href="{$includes}css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - LAYOUT -->
    <link href="{$includes}css/layout.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - UNITEGALLERY -->
    <link href="{$includes}libs/unitegallery/css/unite-gallery.css" rel="stylesheet" type="text/css"/>
    <!-- CSS - JQUERYUI -->
    <link href="{$includes}libs/jquery_ui_admin/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

    <link href="{$includes}libs/croppic/croppic.css" rel="stylesheet" type="text/css"/>

    <!-- JS - JQUERY -->
    <script src="{$includes}js/jquery-11.0.min.js" type="text/javascript"></script>
    <!-- JS - JQUERYUI -->
    <script src="{$includes}libs/jquery_ui_admin/jquery-ui.min.js" type="text/javascript"></script>
    <!-- JS - RECAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- JS - SLIDER -->
    <script src="{$includes}js/Slider.js" type="text/javascript"></script>
    <!-- JS - SLIDESHOW -->
    <script src="{$includes}js/slideshow.js" type="text/javascript"></script>
    <!-- JS - CROPPIC -->
    <script src="{$includes}libs/croppic/croppic.js" type="text/javascript"></script>
    <script src="{$includes}libs/unitegallery/js/unitegallery.min.js" type="text/javascript"></script>
    <script src="{$includes}libs/unitegallery/themes/tiles/ug-theme-tiles.js" type="text/javascript"></script>
    <script src="{$includes}libs/unitegallery/themes/grid/ug-theme-grid.js" type="text/javascript"></script>
    <script src="{$includes}libs/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js" type="text/javascript"></script>
    <script type="text/javascript">
		function imgError(image) {
			image.onerror = "";
			image.src = "{$base}no-image.png";
			return true;
		}
    </script>

</head>
<body>
    <main id="wrapper">
        {include file='Global/_header.tpl'}
        <!--<section id="content">-->
        {block name=Index}{/block}
        <!--</section>-->
        <!-- #content end -->
        {include file='Global/_footer.tpl'}
    </main> <!-- #wrapper end -->

</body>
</html>