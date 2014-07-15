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
  <body id="empresa" class="empresa">
      <div id="sb-site">
          <header class="small-12">
            <?php include 'html-scraps/nav.php'; ?>
          </header>  
          <section class="small-12">
              <article id="side" class="medium-5 large-3 column">
              <h1>Casa Pieropan</h1>
              <h2>Acerca de la empresa</h2>
              <p>Casa Pieropan es una empresa que desde su fundación en el año 1979 lo acompaña brindando servicio y asesoramiento de excelencia, basado en la responsabilidad, seriedad, honestidad y respeto por el cliente. <br>Con más de 35 años en el mercado, nuestro compromiso es su entera safisfacción.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nulla tortor, ornare nec congue sed, blandit eu lectus. Integer ligula arcu, posuere vitae placerat ultricies, consectetur sed erat. Vestibulum non ipsum venenatis, sollicitudin augue a, vestibulum odio. Nullam tempor convallis imperdiet. Nam vehicula non lacus sed fringilla. Cras sed erat luctus, suscipit eros id, hendrerit est. Phasellus ac elit orci. Nullam lorem diam, interdum id ipsum eget, tristique eleifend felis.

Aliquam feugiat elementum felis, sit amet mattis arcu rutrum sed. Proin viverra, libero vitae viverra interdum, nisi nunc vulputate sapien, sed vehicula urna tellus vel nisi. Morbi congue, arcu vitae aliquam dapibus, urna nisi iaculis ligula, bibendum tincidunt augue nulla vel mauris. Nam nisi justo, vestibulum ut lorem pellentesque, pulvinar gravida ante. Proin eu felis sit amet risus fermentum bibendum non vel leo. Cras pellentesque at tortor in tempor. Proin pulvinar nibh pellentesque odio varius, non iaculis velit consequat. Maecenas sed urna diam. Nullam metus lorem, placerat vitae condimentum vitae, facilisis non odio. Aenean at urna vehicula, pulvinar enim vitae, hendrerit ligula.

Mauris vel dui vestibulum magna placerat adipiscing sit amet aliquam augue. Nulla luctus tortor quis libero posuere dictum. Mauris libero leo, feugiat in cursus nec, luctus at sem. Aenean mattis ultrices volutpat. Vivamus lacinia, nulla vitae laoreet tempus, elit tellus laoreet diam, ac semper nisl leo ultricies ligula. Donec ac tristique est, et dapibus dolor. Integer gravida in erat semper congue. Pellentesque porta, arcu vel scelerisque semper, elit justo facilisis lacus, sit amet hendrerit leo lacus eu ipsum. Morbi at ornare augue. Nullam hendrerit sem eu erat laoreet, at consequat velit sagittis.</p>
              </article>
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
