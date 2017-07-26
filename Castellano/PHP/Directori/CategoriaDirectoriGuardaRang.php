<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php"); 

$id = $_GET["id"];
$rang = $_GET["rang"];

$SQL = "UPDATE DirectoriCategoria SET Orden = ".$rang." WHERE IdDirectoriCategoria =" . $id;
$result = mysql_query($SQL,$oConn);

echo $SQL;
?>