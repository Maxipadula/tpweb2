<html> 
<?php include ("viajes_datos.php");?>
<div id="divContenedor">
 	<?PHP 
 	
	
	
 	 
 	$id_viaj =$_POST ["id_viajes"]; 
 	$id_usua =$_POST ["chofer"]; 
 	$id_trnsp =$_POST ["transporte"]; 
	$acoplado =$_POST ["acoplado"]; 
 	$orig =$_POST ["origen"]; 
 	$destin =$_POST ["destino"]; 
 	$client =$_POST ["cliente"]; 
 	$fecha_inic =$_POST ["fecha_inicio"]; 
 	$carg =$_POST ["carga"]; 
	$cero="null";
	$size = 10; 
	
	
	 
 		include ('../rutas.php');
		
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
 	 
	
	 
	  $insert_viaje = mysql_query("insert into viaje (id_viaje, id_usuario,id_acoplado, id_transporte, origen, km_recorridos, destino, cliente, fecha_inicio, fecha_fin, carga) 
 									values (".$id_viaj.",".$id_usua.",".$acoplado.",".$id_trnsp.",'".$orig."','0','".$destin."','".$client."', '".$fecha_inic."','0000-00-00 00:00:00', '".$carg."')  
 										    ;")or die (mysql_error()); 
	 
	$file = 'jr-qrcode.png';
	
	$data ="";
 											 
	echo "<p>ENTREGAR QR AL CHOFER ASIGNADO.</p>    
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 					 
	
	echo '<img src="jr-qrcode.png" />';
 	?> 
 </div>	 
 </html> 