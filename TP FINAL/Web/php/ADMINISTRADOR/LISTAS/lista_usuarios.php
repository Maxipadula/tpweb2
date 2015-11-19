<html>
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	<body>
		<?php
			 include ("./lista_usuarios.php");
             include ("../../rutas.php");
			 include ("../../../dompdf/dompdf_config.inc.php");
			 
			  $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
               mysql_select_db ("tpFinal",$conexion) or die ("no db");
			   
			   
			
		
			   
			 
			 
			 $dompdf= new DOMPDF();
			 $dompdf->load_html_file('./usuario.php');
			 $dompdf->render;
			 $dompdf->stream("sample.pdf");
			 
		?>
		
		
        

        <div id="divContenedor">
        </div>
	</body>
</html>