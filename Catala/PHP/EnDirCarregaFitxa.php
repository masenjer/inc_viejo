<?php
include("../rao/sas_con.php");

$id = $_GET["id"];

$SQL = "SELECT * FROM EnDirHome WHERE IdEnDirHome = ".$id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$Titol = $row["Titol"];
	$TE = $row["TipusEnllac"];
	$URL = $row["URL"];
}

 

echo $Titol."*****".$TE."*****".$URL."*****".$id;

?>