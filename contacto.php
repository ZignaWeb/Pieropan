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
  <body id="contacto" class="contacto">
  <div id="sb-site" >
  <header class="small-12">
  	<?php include 'html-scraps/nav.php'; ?>
  </header>  
  <section class="small-12">
      <article id="side" class="medium-5 large-3 column">
      <h1>TITULO</h1>
      <h2>SUBTITULO</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet orci ultrices, pulvinar sem condimentum, cursus metus. Nunc quis tincidunt arcu. In eget cursus nisi, pretium rhoncus felis. Nunc adipiscing faucibus odio, at rhoncus odio pharetra accumsan. Sed posuere, ipsum eget elementum pharetra, massa ante laoreet risus, vel malesuada nulla enim ultricies quam. Etiam porttitor bibendum volutpat. Mauris eleifend lectus imperdiet fringilla placerat. Ut et malesuada eros. Sed gravida massa nisl, sed sagittis ligula varius vitae. Aliquam sed pretium tortor, et elementum elit. Morbi vitae ullamcorper nulla. Cras luctus neque iaculis tristique posuere. Nulla ullamcorper sem vitae sem laoreet ultrices.<br><br></p>
      <form>
      	<input type="text" placeholder="Nombre y apellido">
        <input type="text" placeholder="Dirección de email">
        <input type="text" placeholder="Asunto">
        <textarea placeholder="Mensaje"></textarea>
        <input id="submit" type="submit" value="Enviar">
      </form>
      </article>
  </section>
  <footer>
  </footer>
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
