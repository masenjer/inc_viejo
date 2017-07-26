<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$n = Pon($_POST["n"]);
$c = Pon($_POST["c"]);
$d = Pon($_POST["d"]);
$u = Pon($_POST["u"]);
$t = Pon($_POST["t"]);
$e = Pon($_POST["e"]);
$cat1 = Pon($_POST["cat1"]);
$cat2 = Pon($_POST["cat2"]);
$IMG = Pon($_POST["IMG"]);

$SQL = "INSERT INTO Directori(Nom, Cognoms, Despatx, Ubicacio, Telefon, Email, Imatge, IdDirectoriCategoria1, IdDirectoriCategoria2) VALUES ('".$n."','".$c."','".$d."','".$u."','".$t."','".$e."','".$IMG."','".$cat1."','".$cat2."')  ";
$result = mysql_query($SQL,$oConn);

$SQL = "Select IdDirectori FROM Directori ORDER BY IdDirectori DESC LIMIT 1";
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$id = $row["IdDirectori"];
}

if ($IMG)
{
	$SQL = "UPDATE Directori SET Imatge = '".$id.$IMG."' WHERE IdDirectori = ".$id;
	$result = mysql_query($SQL,$oConn);
}

echo $id."|".$IMG;
?>