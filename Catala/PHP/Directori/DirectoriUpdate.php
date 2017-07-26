<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$id = Pon($_POST["id"]);
$n = Pon($_POST["n"]);
$c = Pon($_POST["c"]);
$d = Pon($_POST["d"]);
$u = Pon($_POST["u"]);
$t = Pon($_POST["t"]);
$e = Pon($_POST["e"]);
$cat1 = Pon($_POST["cat1"]);
$cat2 = Pon($_POST["cat2"]);
$IMG = Pon($_POST["IMG"]);
$Carrec =  Pon($_POST["Carrec"]);
$Adreca =  Pon($_POST["Adreca"]);
$Xarxes =  Pon($_POST["Xarxes"]);

$condIMG = "";

if ($IMG)
{
	$SQL = "SELECT Imatge FROM Directori WHERE IdDirectori = ".$id;	
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


	 while ($row = $result->fetch_assoc())
	{
		if ($row["Imatge"]){
			if(file_exists("../../../imgDirectori/".$row["Imatge"]))unlink("../../../imgDirectori/".$row["Imatge"]);
			
		}
	}
	$condIMG = ", Imatge = '".$id.$IMG."'";
}
else $condIMG = "";

	if ($d) $Despatx = " Despatx='".$d."',";
	if ($u) $Ubicacio = " Ubicacio='".$u."', ";
	if ($Carrec) $Carrec = " Carrec='".$Carrec."', ";
	if ($Adreca) $Adreca = " Adreca='".$Adreca."', ";
	if ($Xarxes) $Xarxes = " Xarxes='".$Xarxes."', ";

	$SQL = "
		UPDATE  Directori 
		SET 	Nom='".$n."', 
				Cognoms='".$c."',".
				$Despatx.
				$Ubicacio.
				$Carrec.
				$Adreca.
				$Xarxes." 
				Ubicacio='".$u."', 
				Telefon='".$t."', 
				IdDirectoriCategoria1='".$cat1."', 
				IdDirectoriCategoria2='".$cat2."', 
				Email='".$e."' 
				".$condIMG." 
		WHERE IdDirectori = ".$id;
		
		//echo $SQL;

if ($result = mysql_query($SQL,$oConn)) echo $id."|".$IMG;
else die("Error:".mysql_error($oConn));
?>