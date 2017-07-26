<?php
include("../rao/sas_con.php");
session_start();

////LinPage és tipus 1

$Orden = 0;

$SQL = "SELECT Orden from DirectoriCategoria ORDER By Orden Desc LIMIT 1" ;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$Orden = $row["Orden"] + 1;
}
$SQL = "INSERT INTO DirectoriCategoria(Orden) VALUES ($Orden) ";
$result = mysql_query($SQL,$oConn);

echo $SQL;

//echo $idCap;//."|".$IdLin;
?>