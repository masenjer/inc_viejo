<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$id = $_GET["id"];
$titol = $_GET["titol"];
$titol2 = Pon($titol);

$SQL = "UPDATE LinMD SET Titol = '".$titol2."' WHERE IdLinMD =" . $id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $id."|".Quita($titol);
?>