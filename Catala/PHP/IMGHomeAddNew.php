<?php
include("../rao/sas_con.php");

$name = $_GET["name"];

$Orden = 0;

$SQL = "SELECT Orden from IMGHome ORDER By Orden Desc LIMIT 1" ;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$Orden = $row["Orden"];
}

$Orden += 1;

$SQL = "INSERT INTO IMGHome(Ruta, Orden) VALUES ('".$name."',$Orden)  ";
$result = mysql_query($SQL,$oConn);

$SQL = "Select IdIMGHome FROM IMGHome ORDER BY IdIMGHome DESC LIMIT 1";
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$id = $row["IdIMGHome"];
}

echo $id."|".$name;
?>