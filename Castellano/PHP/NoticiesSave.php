<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
include("Fechas.php");
include("CS.php"); 

session_start();

if (CS())
{
	$T = $_POST["T"];
	$T = Pon($T);
	$C = $_POST["C"];
	$C = Pon($C);
	$F = $_POST["F"];
	$F = InsertFecha($F);
//	$FP = $_POST["FP"];
//	$FP = InsertFecha($FP);
//	$FD = $_POST["FD"];
//	$FD = InsertFecha($FD);
	$IMG = $_POST["IMG"];
	$id = $_POST["id"];
	$NOU = $_POST["NOU"];
	$NOU = Pon($NOU);
	
	if ($id == "")
	{	
		$SQL = "INSERT INTO Noticias(Titol, Cos, FechaNot, FechaPub, FechaDesPub, Image, NOU, IdSite) VALUES ('$T','$C','$F','$FP','$FD','$IMG',$NOU,".$_SESSION["IdSite"].")";
		$result = mysql_query($SQL,$oConn);
		
		$SQL = "SELECT IdNoticia FROM Noticias ORDER BY IdNoticia DESC LIMIT 1";
		$result = mysql_query($SQL,$oConn);
		
		while($row = mysql_fetch_array($result))
		{
			$id = $row["IdNoticia"]; 	
		}
	
	}
	else
	{
		$SQL = "UPDATE Noticias SET 
					Titol = '$T',
					Cos = '$C', 
					FechaNot = '$F', 
					FechaPub = '$FP', 
					FechaDesPub = '$FD',
					Image = '$IMG',
					NOU = $NOU,
					IdSite = ".$_SESSION["IdSite"]."
					WHERE IdNoticia = $id";
		$result = mysql_query($SQL,$oConn);
	}
	
	echo $id;
}
?>