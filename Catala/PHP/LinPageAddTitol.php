<?php
include("../rao/sas_con.php");
session_start();

////Titol és tipus 0

$idCap = $_GET["IdCap"];
$IdLin = $_GET["IdLin"];
//$IdRel = $_GET["IdRel"];

$Orden = 0;

$SQL = "SELECT Orden from LinMenu WHERE IdSite =".$_SESSION["IdSite"]." AND IdCapMenu = " . $idCap . "  AND IdLinMenuRel = ".$IdLin." AND  Tipus <>2 ORDER By Orden Desc LIMIT 1" ;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$Orden = $row["Orden"] + 1;
}

$SQL = "INSERT INTO LinMenu(IdCapMenu, IdLinMenuRel, Titol,Orden, Tipus, IdSite) VALUES ($idCap,$IdLin,'Nueva P&aacute;gina',$Orden,0,".$_SESSION["IdSite"].") ";
$result = mysql_query($SQL,$oConn);

echo $idCap;//."|".$IdLin;
?>