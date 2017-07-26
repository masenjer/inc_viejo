<?php
include("../rao/sas_con.php");

$IdLinMD = $_GET["IdLinMD"];

$SQL = "SELECT * FROM LinMD WHERE IdLinMD = " . $IdLinMD;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$IdCap = $row["IdCapMenu"];
}

$SQL = "DELETE FROM LinMD WHERE IdLinMD = " . $IdLinMD; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $IdCap;//."|".$IdLin;
?>