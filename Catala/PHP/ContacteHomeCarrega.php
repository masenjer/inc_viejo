<?php
include("../rao/sas_con.php");

ini_set("session.gc_maxlifetime",3);
session_start();

$permiso="";
$colsp=5;




if ($_SESSION["Noticias"]=="1")
{	
	$resultado.= '<button class="EditButton" onClick= "CarregaContacteEdicio();"></button>';
	$colsp = 3;
}


$SQL = "SELECT * FROM Contacte WHERE  IdSite =".$_SESSION["IdSite"]." ";

if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 
while ($row = $result->fetch_assoc()){

	$accion = ' onClick="CarregaEnllacIntern(\''.$row["URL"].'\');"'; 
	 
	$resultado = $resultado . '
				<h2 class="block-title" role="heading" aria-level="2">'.$row["Titol"].'</h2>
							
				<aside class="content-avisos">'.$row["Contingut"].'</aside>';

				/*
				<tr valign="middle">					
					<td height="20px" align="right" '.$accion.' class="InfoContacteHome"> Telèfons i horari	</td>					
				</tr>';
				*/
}




echo $resultado;
?>
