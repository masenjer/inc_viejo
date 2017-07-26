<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
session_start();

$id = $_GET["id"];
$Titol = Pon($_GET["Titol"]);
$TE = $_GET["TE"];
$URL = $_GET["URL"];

$Orden = 0;

$SQL = "SELECT Orden from EnDirHome ORDER By Orden Desc LIMIT 1" ;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$Orden = $row["Orden"] + 1;
}



if ($id == "")
{	
  $SQL = "INSERT INTO EnDirHome (Titol, TipusEnllac, URL,Orden, IdSite ) VALUES ('$Titol',$TE,'$URL',$Orden,".$_SESSION["IdSite"].")";
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

	
	$SQL = "SELECT IdEnDirHome FROM EnDirHome ORDER BY IdEnDirHome DESC LIMIT 1";
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

	
	while ($row = $result->fetch_assoc())
	{
		$id = $row["IdEnDirHome"]; 	
	}

}
else
{
	$SQL = "UPDATE EnDirHome SET 
				Titol = '$Titol',
				TipusEnllac = $TE, 
				URL = '$URL',
				IdSite = ".$_SESSION["IdSite"]."				
				WHERE IdEnDirHome = $id";
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

}

echo $id;
?>