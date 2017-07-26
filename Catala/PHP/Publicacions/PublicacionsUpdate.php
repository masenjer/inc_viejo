<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$Tipus = Pon($_POST["Tipus"]);
$Autor = Pon($_POST["Autor"]);
$Titol = Pon($_POST["Titol"]);
$Any = Pon($_POST["Any"]);
$Linies = Pon($_POST["Linies"]);
$Revista = Pon($_POST["Revista"]);

$id = Pon($_POST["id"]);

$SQL = "
	UPDATE Publicacions 
	SET 	Tipus	=".$Tipus.", 
			Autor	='".$Autor."', 
			Titol	='".$Titol."', 
			Any		='".$Any."', 
			Linies	='".$Linies."', 
			Revista	='".$Revista."' 
	WHERE IdPublicacions = ".$id;

if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $SQL;
?>