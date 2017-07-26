<?php
include("../rao/sas_con.php");

$IdCat = $_GET["IdCat"];

$SQL = "DELETE FROM DirectoriCategoria WHERE IdDirectoriCategoria = " . $IdCat; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 

echo $idCap;//."|".$IdLin;
?>