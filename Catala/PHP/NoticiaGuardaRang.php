<?php
include("../rao/sas_con.php");
include("CS.php"); 

if (CS())
{
	$id = $_POST["id"];
	$r = $_POST["r"];
	
	if (!$r) $r = "NULL";
	
	$SQL = "UPDATE Noticias SET Rang = ".$r." WHERE IdNoticia =" . $id;
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

	
	echo $SQL;
}
else echo "4055";
?>