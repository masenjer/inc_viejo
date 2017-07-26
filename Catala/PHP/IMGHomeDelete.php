<?php
include("../rao/sas_con.php");
error_reporting(E_ALL);
$id = $_GET["id"];
$ruta = $_GET["ruta"];
$orden = $_GET["orden"];

unlink("../../IMGHomeDin/".$id.$ruta);

$SQL = "DELETE FROM IMGHome WHERE IdIMGHome = ".$id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));



$SQL = "SELECT IdIMGHome, Orden FROM IMGHome WHERE Orden > ".$orden;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$nOrden = $row["Orden"] - 1;
	
	$SQL2 = "UPDATE IMGHome SET Orden = ".$nOrden." WHERE IdIMGHome = ".$row["IdIMGHome"];
	if (!$result2 = $mysqli->query($SQL2))printf("Errormessage: %s\n", mysqli_error($mysqli)); 

}
?>