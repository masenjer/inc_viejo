<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
session_start();

$id = $_GET["id"];
$FB = $_GET["FB"];
$TE = $_GET["TE"];
$IMG = $_GET["IMG"];
$IMG = Pon($IMG);
$URL = $_GET["URL"];
$OldDoc = $_GET["OldDoc"];

if ($OldDoc != "")
{
	unlink("../Documents/".$OldDoc)	;
}

if ($id == "")
{	 
	$SQL = "INSERT INTO Destacat(FormatBoto,TipusEnllac, Imatge, URL, Orden, IdSite ) VALUES ($FB,$TE,'$IMG','$URL',0, ".$_SESSION["IdSite"]." )";
	$result = mysql_query($SQL,$oConn);
	
	$SQL = "SELECT IdDestacat FROM Destacat ORDER BY IdDestacat DESC LIMIT 1";
	$result = mysql_query($SQL,$oConn);
	
	while($row = mysql_fetch_array($result))
	{
		$id = $row["IdDestacat"]; 	
	}

}
else
{
	$SQL = "UPDATE Destacat SET 
				FormatBoto = $FB,
				TipusEnllac = $TE, 
				Imatge = '$IMG', 
				URL = '$URL',
				IdSite = ".$_SESSION["IdSite"]."			
				WHERE IdDestacat = $id";
	$result = mysql_query($SQL,$oConn);
}

echo $id;
?>