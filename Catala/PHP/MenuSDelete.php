<?php
include("../rao/sas_con.php");

$IdCap = $_GET["IdCap"];

$SQL = "DELETE FROM LinMenu WHERE IdCapMenu = " . $IdCap . " AND Tipus <> 2"; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


$SQL = "DELETE FROM CapMenu WHERE IdCapMenu = " . $IdCap; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


?>