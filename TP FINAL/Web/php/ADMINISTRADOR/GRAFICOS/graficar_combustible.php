
<?php 		
			
		
			 include ("./graficos_datos.php"); 
			 require_once("./jpgraph-1.27.1/src/jpgraph.php");
			 require_once("./jpgraph-1.27.1/src/jpgraph_line.php");
			 
			 
			/* 
			 $id_transporte = $_GET["ID"];
			 
			 $consulta_datos= mysql_query("SELECT Km_recorridos km
										   FROM viaje 										
										   WHERE id_transporte='".$id_transporte."' ")or die(mysql_error());
			
			$cant = mysql_num_rows($consulta_datos);

			$datos = array(); 
    
			while($row = mysql_fetch_array($consulta_datos)) { 
    
				$datos[] = $row; 
				
				$km[]=$datos[0]["km"];
    
			} 
				
			*/
			

		
			
		
			


			
			$asd = array(1,2,3,);
			
			$ancho = 600;
			$alto = 250;
		header('Content-type: text/plain');
		
		$graph = new Graph($alto,$ancho,"auto");
		
		$graph->SetScale('textlin');
		
		$curva = new LinePlot($asd);
		$curva->SetColor("red");
		
		$graph->Add($curva);
		
		$graph->Stroke();
		
?>	
