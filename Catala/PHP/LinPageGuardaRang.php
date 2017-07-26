<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$id = $_GET["id"];
$rang = $_GET["rang"];

$SQL = "UPDATE LinMenu SET Orden = ".$rang." WHERE IdLinMenu =" . $id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


$SQL = "SELECT IdCapMenu from LinMenu WHERE IdLinMenu =" . $id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	echo $row["IdCapMenu"];	
}

?>