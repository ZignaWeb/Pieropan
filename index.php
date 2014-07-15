<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Casa Pieropan - Inicio</title>
        <link rel="stylesheet" href="r/css/normalize.css"/> 
        <link rel="stylesheet" href="r/css/foundation.css" />           
        <link rel="stylesheet" href="r/css/slidebars.css" /> 
        <link rel="stylesheet" href="r/css/zigna.css" /> 
        <script src="r/js/modernizr.js"></script>
    </head>
    <body id="home" class="home">
    <div id="sb-site">
      <header class="small-12">
        <?php include 'html-scraps/nav.php'; ?>
      </header>        
      <section class="small-12">
      </section>
    </div>
    <script src="r/js/vendor/jquery.js"></script>
    <script src="r/js/vendor/slidebars.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                $.slidebars();
            });
        }) (jQuery);
    </script>     
    <script>
		$("#b li a").hover(function(){
			$("#a").attr("style", "color: #333333 !important");
		},function(){
			$("#a").attr("style", "color: #f4f4f4");
		});
    </script>
    </body>
</html>
