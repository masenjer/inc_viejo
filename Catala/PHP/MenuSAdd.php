<?php
session_start();
include("../rao/sas_con.php");

$idCap = $_GET["IdCap"];
$IdLin = $_GET["IdLin"];

$Orden = 0;

$SQL = "SELECT Orden from CapMenu WHERE IdSite = ".$_SESSION["IdSite"]." ORDER By Orden Desc LIMIT 1" ;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$Orden = $row["Orden"] + 1;
}


$SQL = "INSERT INTO CapMenu(Titol,Orden,IdSite) VALUES ('Nueva P&aacute;gina',$Orden,".$_SESSION["IdSite"].") ";
$result = mysql_query($SQL,$oConn);

//."|".$IdLin;
?>