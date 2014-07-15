<?

// arquitectura

/*
# p 		: nivel de permiso
# a			: acciones posibles
# t 		: texto a mostrar en pantallla
# db		: correspondencia en la base de datos
# type 		: tipo de elemento en formulario - drop / input / textarea / select
# menu		: como mostrar - menu principal (top) / menu contextual (context)
# get   	: espera un id que corresponde a la tabla definida por get
# val   	: tipo de valor ingresado - varchar / text / file / email / number / date / datetime
# force 	: campo obligatorio
# autofill 	: valor prederteminado
# hide		: mostrar en list o no - 0 (mostrar inline) / 1 (popup) / 2 (no mostrar)
# search	: define un campo como posible de buscar o no, not set = searchable - 1(si) / 0(no)
# rtf		: si muestra o no la barra de herramientas de edicion de textos sobre los campos teaxtarea - si / no
# dependency: poblar con los datos de a una tabla de la autogestion
# array		: poblar con los datos de un array definido en data.php
*/

/*
*Constantes para SEARCH
*/
define("searchable", 1);
define("nosearchable", 0);

/*
*Constantes para HIDE
*/
define("showinline", 0);
define("showpop", 1);
define("noshow", 2);
/*
*Constantes para FORCE
*/
define("NO", 0);
define("SI", 1);




$cpa = array (
	"cpa" => array (
		"t" => $inline[$lang]["cp"],
		"db"=> "cpa",
		"c" => array (
			"his" => array ("db" => "his", "menu" => "menu", "t" => $inline[$lang]["his"], "p" => 1),
			"setup" => array ("db" => "setup", "menu" => "menu", "t" => $inline[$lang]["setup"], "p" => 99),
		)
	)
);

$secciones=array(
	
		/*Rubros*/
	"Rubros" => array (
		"db" => "ag_rubros",
		"t" => "Rubros",
		"l" => 0,
		"p" => 1,
		"a" => array (
			"listar" => array ( "db" => "listar", "menu" => "menu", "t" =>$inline[$lang]["listar"], "p" => 1),
			"editar" => array ( "db" => "editar", "menu" => "context", "t" =>$inline[$lang]["editar"], "p" => 1),
			"delete" => array ( "db" => "delete", "menu" => "context", "t" =>$inline[$lang]["delete"], "p" => 1),
			"cargar" => array ( "db" => "cargar", "menu" => "menu", "t" =>$inline[$lang]["cargar"], "p" => 1),
			"export" => array ( "db" => "export", "menu" => "menu", "t" =>$inline[$lang]["export"], "p" => 99),
			"medias" => array ( "db" => "medias", "menu" => "context", "t" =>$inline[$lang]["medias"], "p" => 1)
		),
		"c" => array (
			"nombre" => array( "db" => "nombre", "t" => "Nombre del Rubro", "type" => "input", "val" => "varchar", "force" => 1, "search" => searchable),
			"desc" => array ("db" => "desc", "t" => $inline[$lang]["desc"], "type" => "textarea", "val" => "text", "force" => NO, "search" => nosearchable),
			"mostrar" => array ( "db" => "mostrar", "t" => $inline[$lang]["visibility"], "val" => "number", "type" => "select", 
					"options" => array (1 => $inline[$lang]["Show"], 0 => $inline[$lang]["NoShow"])
					),
			
			"img" => array ( "db" => "imagen", "t" => $inline[$lang]["File"], "type" => "img", "dependency" =>"med", "val" => "file", "search" => 0,"hide" => 2,"force" => 1,
					"imgsizes" => array (
						"thumb" => array ( "w" => 500, "h" => 500),
					)
				)
		)
	),

	
	/*Productos*/
	"productos" => array (
		"db" => "ag_productos",
		"t" => "Productos",
		"l" => 0,
		"p" => 1,
		"a" => array (
			"listar" => array ( "db" => "listar", "menu" => "menu", "t" =>$inline[$lang]["listar"], "p" => 1),
			"editar" => array ( "db" => "editar", "menu" => "context", "t" =>$inline[$lang]["editar"], "p" => 1),
			"delete" => array ( "db" => "delete", "menu" => "context", "t" =>$inline[$lang]["delete"], "p" => 1),
			"cargar" => array ( "db" => "cargar", "menu" => "menu", "t" =>$inline[$lang]["cargar"], "p" => 1),
			"export" => array ( "db" => "export", "menu" => "menu", "t" =>$inline[$lang]["export"], "p" => 99),
			"medias" => array ( "db" => "medias", "menu" => "context", "t" =>$inline[$lang]["medias"], "p" => 1)
		),
		"c" => array (
			"nombre" => array( "db" => "nombre", "t" => "Nombre", "type" => "input", "val" => "varchar", "force" => SI, "search" => searchable),
			"creado" => array ("db" => "creado", "t" => $inline[$lang]["created"], "type" => "input", "val" => "date", "force" => SI, "search" => 1,  "autofill" =>$hoy),
			"desc" => array ("db" => "desc", "t" => $inline[$lang]["desc"], "type" => "textarea", "val" => "text", "force" => SI, "search" => searchable),
			"rubroid" => array ("db" => "rubroid", "t" => "Rubro", "type" => "drop", "val" => "number", "force" => SI, "search" => 0, "get" => "Rubros"),
			"mostrar" => array ( "db" => "mostrar", "t" => $inline[$lang]["visibility"], "val" => "number", "type" => "select", 
					"options" => array (1 => $inline[$lang]["Show"], 0 => $inline[$lang]["NoShow"])
					),
			"img" => array ( "db" => "imagen", "t" => $inline[$lang]["File"], "type" => "img", "dependency" =>"med", "val" => "file", "search" => 0,"hide" => 2,
					"imgsizes" => array (
						"thumb" => array ( "w" => 500, "h" => 500),
					)
				)
		)
	),
	

	
	
	
	
	
	
	
	
	// required
	"med" => array (
		"db" => "ag_media",
		"t" => $inline[$lang]["media"],
		"l" => 1,
		"p" => 1,
		"a" => array (
			"listar" => array ( "db" => "listar", "menu" => "menu", "t" =>$inline[$lang]["listar"], "p" => 1),
			"editar" => array ( "db" => "editar", "menu" => "context", "t" =>$inline[$lang]["editar"], "p" => 1),
			"delete" => array ( "db" => "delete", "menu" => "context", "t" =>$inline[$lang]["delete"], "p" => 1),
			"cargar" => array ( "db" => "cargar", "menu" => "menu", "t" =>$inline[$lang]["cargar"], "p" => 1),
			"export" => array ( "db" => "export", "menu" => "menu", "t" =>$inline[$lang]["export"], "p" => 1)
		),
		"c" => array (
			"titulo" => array( "db" => "titulo", "t" => $inline[$lang]["title"], "type" => "input", "val" => "varchar", "force" => 1, "search" => 1),
			"descripcion" => array ("db" => "descripcion", "t" => $inline[$lang]["desc"], "type" => "textarea", "val" => "text", "search" => 1),
			"creada" => array ("db" => "creada", "t" => $inline[$lang]["created"], "type" => "input", "val" => "datetime", "force" => 1, "search" => 1, "hide" =>2, "autofill" =>$ahora),
			"url" => array ("db" => "url", "t" => $inline[$lang]["File"], "type" => "img", "val" => "file", "force" => 1, "search" => 0), 
			"dep_table" => array ("db" => "dep_table", "t" => $inline[$lang]["uploadto"], "type" => "input", "val" => "varchar", "force" => 1, "search" => 1, "hide" =>2), 
			"dep_id" => array ("db" => "dep_id", "t" => $inline[$lang]["asignto"], "type" => "input", "val" => "number", "force" => 1, "search" => 1, "hide" =>2), 
			"type" => array ("db" => "type", "t" => $inline[$lang]["type"], "type" => "input", "val" => "varchar", "search" => 1, "hide" => 2),
			"mostrar" => array ( "db" => "mostrar", "t" => $inline[$lang]["visibility"], "type" => "select", "val" => "number", 
							  "options" => array (1 => $inline[$lang]["Show"], 0 => $inline[$lang]["NoShow"])
							)
		)
	),
	"his" => array (
		"db" => "historial",
		"t" => "Historial",
		"p" => 1,
		"a" => array ( 
			"listar" => array ( "db" => "listar", "menu" => "menu", "t" =>$inline[$lang]["listar"], "p" => 1),
			"editar" => array ( "db" => "editar", "menu" => "context", "t" =>$inline[$lang]["editar"], "p" => 99),
			"delete" => array ( "db" => "delete", "menu" => "context", "t" =>$inline[$lang]["delete"], "p" => 99),
			"cargar" => array ( "db" => "cargar", "menu" => "menu", "t" =>$inline[$lang]["cargar"], "p" => 99),
			"export" => array ( "db" => "export", "menu" => "menu", "t" =>$inline[$lang]["export"], "p" => 99)
			),
		"c" => array(
			"quien" => array ( "db" => "quien", "t" => $inline[$lang]["nombre"], "type" => "drop", "val" => "number", "get" => "adm", "search" => 1),
			"accion" => array ( "db" => "accion", "t" => $inline[$lang]["Accion"], "type" => "input", "val" => "varchar", "search" => 1),
			"codigo" => array ( "db" => "codigo", "t" => $inline[$lang]["Codigo"], "type" => "textarea", "val" => "codigo", "hide" => 2),
			"fechahora"  => array ( "db" => "fechahora", "t" => $inline[$lang]["Datetime"], "type" => "input", "val" => "datetime", "search" => 1)
		)
	),
	"adm" => array (
		"db" => "ag_admins",
		"t" => "Admins",
		"p" => 1,
		"a" => array ( 
			"listar" => array ( "db" => "listar", "menu" => "menu", "t" =>$inline[$lang]["listar"], "p" => 1),
			"editar" => array ( "db" => "editar", "menu" => "context", "t" =>$inline[$lang]["editar"], "p" => 1),
			"delete" => array ( "db" => "delete", "menu" => "context", "t" =>$inline[$lang]["delete"], "p" => 99),
			"cargar" => array ( "db" => "cargar", "menu" => "menu", "t" =>$inline[$lang]["cargar"], "p" => 1),
			"export" => array ( "db" => "export", "menu" => "menu", "t" =>$inline[$lang]["export"], "p" => 99)
			),
		// 	usr	psw	email	level
		"c" => array (
			"usr" => array ( "db" => "usr", "t" => $inline[$lang]["Username"], "type" => "input", "val" => "varchar", "force" => "1"),
			"psw" => array ( "db" => "psw", "t" => $inline[$lang]["Password"], "type" => "password", "val" => "varchar", "force" => "1", "search" => 0),
			"email" => array ( "db" => "email", "t" => $inline[$lang]["Email"], "type" => "input", "val" => "email"),
			"level" => array ( "db" => "level", "t" => $inline[$lang]["Level"], "type" => "select", "val" => "number", "force" => "1", 	
					"options" => array (1 => "Admin",2 => "Full Admin")
				  )
		)
	)
	
	
);
?>