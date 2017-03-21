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
$result = mysql_query($SQL,$oConn);

echo $SQL;
?>