<?php
	include ("Clase.php");
	include ("../Fechas.php");
	
	$noticias = new News;
	$noticias->Conexion = "../../rao/sas_con.php";
	
	$Desde = ($_POST["Desde"])?InsertFecha($_POST["Desde"]):"";
	$Hasta = ($_POST["Hasta"])?InsertFecha($_POST["Hasta"]):"";	
	

	echo $noticias->CargaListadoNews($_POST["txt"],$Desde,$Hasta,$_POST["id"]);
?>