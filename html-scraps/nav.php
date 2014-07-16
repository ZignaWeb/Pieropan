<?
include ("cp/r/sql.php");
$rt = "SELECT * FROM ag_rubros WHERE mostrar = 1";
$rq = mysql_query($rt);
$rows = mysql_num_rows($rq);
while ($rd = mysql_fetch_assoc($rq)){
	$rubro[] = $rd["nombre"];
	$rubroId[] = $rd["id"];
	
	$rit = "SELECT url FROM ag_media WHERE dep_table = 'rubros' AND dep_id = ".$rd['id']."";
	$riq = mysql_query($rit);
	$rid = mysql_fetch_assoc($riq);
	$mediaUrlRubro[] = $rid["url"];
}
?>
<div id='cssmenu' class="show-for-medium-up">  
    <ul>
        <li class="has-sub"><a class="no-hover" href="index.php"><img class="logo" src="r/img/logo2.png"></a></li>   
        <li class='has-sub'><a href='empresa.php'><span class="menu-section">Empresa</span></a>             
        </li>
        <li class='has-sub'><a href='catalogo.php?id=<?=$rubroId[0]?>'><span id="a" class="menu-section">Catálogo</span></a>
          <ul id="b">
			<?
            for($i = 0; $i < $rows; $i++){
				if($i == $rows-1){
					echo "<li class='last'><a href='catalogo.php?id=".$rubroId[$i]."'>".$rubro[$i]."</a></li>";
				}
            	else {echo "<li><a href='catalogo.php?id=".$rubroId[$i]."'>".$rubro[$i]."</a></li>";}
            }                
            ?>
          </ul>
        </li>
        <li class='last'><a href='contacto.php'><span class="menu-section">Contacto</span></a></li>
        <span class="text-center brand">CASA PIEROPAN</span>
        <div class="text-center social-media">
           <a id="light" href="#"><img src="r/img/fb.png"></a>
           <br /><span style="font-size:12px;">sitio por: <a href="http://www.zigna.com.ar" target="_blank">ZIGNA</a></span>
       </div>
    </ul>
</div>

<div class="small-12 custom-nav show-for-small-only">
    <nav class="small-12 column">
    	<div class="small-2 column">
        <a href="#" class="sb-toggle-left">Menu</a>
        </div>
        <div class="small-8 text-center column">
        <span>Casa Pieropan</span>
        </div>
        <div class="social-media-small small-2 column text-center small-font">
            <a href="#"><img src="r/img/fb.png"></a>
            <br />
            <span><a href="http://www.zigna.com.ar">ZIGNA</a></span>
        </div>
    </nav>
</div>


<div class="show-for-small-only sb-slidebar sb-left sb-width-thin">
    <ul>
    	<li><a href="index.php">Inicio</a></li>
    	<li><a href="empresa.php">Empresa</a></li>
    	<li class="side-has-submenu"><a href="catalogo.php">Catálogo</a></li>     
    	<li><a href="contacto.php">Contacto</a></li>                
    </ul>
</div>