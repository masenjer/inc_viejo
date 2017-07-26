<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$contingut = $_POST["contingut"];
$c2 = Pon($contingut);

$id = $_POST["id"];

switch($_POST["op"])
{
	case 1: 	$SQL = "UPDATE LinMenu SET Contingut = '".$c2."' WHERE IdLinMenu =".$id;
				break;
	case 2: 	$SQL = "UPDATE LinMD SET Contingut = '".$c2."' WHERE IdLinMD =".$id;
				break;

}



if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 

echo $id ."|". $_POST["op"];// $contingut;//."|".$IdLin;
?>