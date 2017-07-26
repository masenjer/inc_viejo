<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$Tipus = Pon($_POST["Tipus"]);
$Autor = Pon($_POST["Autor"]);
$Titol = Pon($_POST["Titol"]);
$Any = Pon($_POST["Any"]);
$Linies = Pon($_POST["Linies"]);
$Revista = Pon($_POST["Revista"]);

$SQL = "INSERT INTO Publicacions(Tipus, Autor, Titol, Any, Linies, Revista) VALUES (".$Tipus.",'".$Autor."','".$Titol."','".$Any."','".$Linies."','".$Revista."')  ";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $SQL;
?>