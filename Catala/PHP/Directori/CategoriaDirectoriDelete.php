<?php
include("../../rao/sas_con.php");

$IdCat = $_POST["IdCat"];

$SQL = "UPDATE Directori SET IdDirectoriCategoria = NULL WHERE IdDirectoriCategoria = ".$IdCat;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


$SQL = "DELETE FROM DirectoriCategoria WHERE IdDirectoriCategoria = " . $IdCat; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $idCap;//."|".$IdLin;
?>