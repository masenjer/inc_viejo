<?php
include("../rao/sas_con.php");
error_reporting(E_ALL);
$id = $_GET["id"];
$ruta = $_GET["ruta"];
$orden = $_GET["orden"];

unlink("../../IMGHomeDin/".$id.$ruta);

$SQL = "DELETE FROM IMGHome WHERE IdIMGHome = ".$id;
$result = mysql_query($SQL,$oConn);


$SQL = "SELECT IdIMGHome, Orden FROM IMGHome WHERE Orden > ".$orden;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$nOrden = $row["Orden"] - 1;
	
	$SQL2 = "UPDATE IMGHome SET Orden = ".$nOrden." WHERE IdIMGHome = ".$row["IdIMGHome"];
	$result2 = mysql_query($SQL2,$oConn);

}
?>