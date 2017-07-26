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
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


$SQL = "Select IdDirectori FROM Directori ORDER BY IdDirectori DESC LIMIT 1";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


 while ($row = $result->fetch_assoc())
{
	$id = $row["IdDirectori"];
}

if ($IMG)
{
	$SQL = "UPDATE Directori SET Imatge = '".$id.$IMG."' WHERE IdDirectori = ".$id;
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

}

echo $id."|".$IMG;
?>