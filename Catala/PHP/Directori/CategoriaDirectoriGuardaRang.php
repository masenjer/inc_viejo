<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php"); 

$id = $_GET["id"];
$rang = $_GET["rang"];

$SQL = "UPDATE DirectoriCategoria SET Orden = ".$rang." WHERE IdDirectoriCategoria =" . $id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $SQL;
?>