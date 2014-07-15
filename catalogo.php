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
    <link rel="stylesheet" href="r/css/magnific-popup.css" />        
    <script src="r/js/modernizr.js"></script>
  </head>
  <body id="catalogo" class="catalogo">
  <header class="small-12">
  	<?php include 'html-scraps/nav.php'; ?>
  </header>
  <section class="small-12">
      <article id="side" class="small-12 medium-4 large-3 column">
        <div class="show-for-medium-up small-6 medium-12 large-6 view rubro">
            <a href="#">
                <img src="r/img/rubro-1.jpg" />
                <div class="mask"></div>
                <div class="content">
                    <h2>Vajilla</h2>
                </div>
            </a>
        </div>    
        <div class="show-for-small-only small-12 text-center small-rubro">
        <a href="#">Rubro 1</a>
        </div>     
      </article>
      <article id="content" class="small-12 medium-8 large-9 column text-center">
        
        <div class="prod small-6 medium-4 large-2 view view-first">  
             <img src="r/img/articulomarked.jpg" />  
             <div class="mask">  
             <h2>Producto1</h2>  
             <p>Descripción</p>  
                 <a href="#pop-1" class="info open-popup-link">
                 	Leer más
                 </a>  
             </div> 
        </div> 
      </article>
  </section>
  <div id="pop-1" class="white-popup mfp-hide">
  <img src="r/img/rojo.jpg">
  <p>POP1 Esto es una descripción mas completa del producto con una foto mas grande</p>
  </div>
  
	<script src="r/js/vendor/jquery.js"></script>  
    <script src="r/js/vendor/jquery.magnific-popup.min.js"></script>    
    <script src="r/js/vendor/slidebars.min.js"></script>
	<script>
        (function($) {
            $(document).ready(function() {
                $.slidebars();
            });
        }) (jQuery);
    </script>
    <script>
		$('.open-popup-link').magnificPopup({
		  type:'inline',
		  midClick: true,
		  removalDelay: 300,
		  mainClass: 'mfp-fade'
		});
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
