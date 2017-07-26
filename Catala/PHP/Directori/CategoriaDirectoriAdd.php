<?php
include("../../rao/sas_con.php"); 
session_start();

////LinPage és tipus 1

$Orden = 0;

$SQL = "SELECT Orden from DirectoriCategoria ORDER By Orden Desc LIMIT 1" ;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$Orden = $row["Orden"] + 1;
}
$SQL = "INSERT INTO DirectoriCategoria(Orden) VALUES ($Orden) ";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $SQL;

//echo $idCap;//."|".$IdLin;
?>