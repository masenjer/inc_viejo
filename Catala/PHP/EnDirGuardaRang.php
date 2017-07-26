<?php
include("../rao/sas_con.php");

$id = $_GET["id"];
$rang = $_GET["rang"];

$SQL = "UPDATE EnDirHome SET Orden = ".$rang." WHERE IdEnDirHome =" . $id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


?>