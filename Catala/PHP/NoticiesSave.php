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
		if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

		
		$SQL = "SELECT IdNoticia FROM Noticias ORDER BY IdNoticia DESC LIMIT 1";
		if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

		
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
		if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

	}
	
	echo $id;
}
?>