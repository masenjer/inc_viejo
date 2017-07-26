<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
session_start();

$id = $_GET["id"];
$Titol = $_GET["Titol"];
$Titol = Pon($Titol);
$TE = $_GET["TE"];
$URL = $_GET["URL"];

$SQL = "SELECT COUNT(*) as Cuenta from Contacte WHERE  IdSite =".$_SESSION["IdSite"]." ";

$Cuenta = "";

if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 
while ($row = $result->fetch_assoc()){
{	
	$Cuenta = $row["Cuenta"];	
}


if ($Cuenta!="0")
	$SQL = "UPDATE Contacte SET 
				Titol = '$Titol',
				Contingut = '$TE', 
				URL = '$URL'
			WHERE IdSite = ".$_SESSION["IdSite"];
else $SQL = "INSERT INTO Contacte (Titol, Contingut, URL, IdSite) VALUES ('$Titol','$TE','$URL', ".$_SESSION["IdSite"].")";							

if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 

?>