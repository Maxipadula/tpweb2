
	
	 <?php include ("viajes_datos.php"); ?>
	<?php 
	
	
	if(!isset($_SESSION)){
		session_start();
	}
	$modificar_viaje = $_POST["id_viaje"];
	
	$_SESSION["viaje_a_modificar"] = $modificar_viaje;
	

 		
 		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
		
		echo "<form class='chequeado' method='post' action=". $ingresar_modificaciones_viaje.">";
		
		ifs('nombre');
	
		
		  if(chequeado('acoplado'))
		{
		echo "</br>Acoplado</br>
		  <select name='acoplado'>    
		  <option value='sin_acoplado' selected='selected'></option>
        <option value='acoplado1'>acoplado1</option>
        <option value='acoplado2'>acoplado2</option>
        <option value='acoplado3'>acoplado3</option>		 
        <option value='acoplado4'>acoplado4</option>
	    <option value='acoplado5'>acoplado5</option>
        <option value='acoplado6'>acoplado6</option>
          </select>"
		;}

		  if(chequeado('transporte'))
		{
		echo "</br>Transporte</br>
		  <select name='transporte'>    
		  <option value='1111' selected='selected'>1111</option>
        <option value='2222'>2222</option>
        <option value='3333'>3333</option>
        <option value='4444'>4444</option>		 
        <option value='5555'>5555</option>
	    <option value='6666'>6666</option>
        <option value='7777'>7777</option>
        <option value='8888'>8888</option>
          </select>"
		;}
		
		
		
		
		
		
		
		echo "</br> <input type='submit' value='Enviar'/>
							<input type='reset' value='Borrar'/>
							<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form> ";
		
		function ifs ($check){
		
			if(chequeado($check))
			{
			  echo "</br>
					 ".ucfirst($check)."
						</br>
						<input type='text' name='".$check."'>
						
					</div>
					
					</br>";
				};
		}
		
		function chequeado($valor){
			if(!empty($_POST["datos"]))
			{
				foreach($_POST["datos"] as $chkval)
				{
					if($chkval == $valor)
					{
						return true;
					}
				}
			}
        return false;
        }
		
	
	?>