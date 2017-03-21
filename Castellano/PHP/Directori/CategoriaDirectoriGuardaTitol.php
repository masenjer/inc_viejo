<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php"); 
session_start();

switch ($_SESSION["IdSite"]){
	case 0: $idioma = "_ca";
			break;
	case 1: $idioma = "_es";
			break;
	case 2: $idioma = "_en";
			break;					
}

$id = $_GET["id"];
$titol = $_GET["titol"];
$titol2 = Pon($titol);

$SQL = "UPDATE DirectoriCategoria SET Titol".$idioma." = '".$titol2."' WHERE IdDirectoriCategoria =" . $id;
$result = mysql_query($SQL,$oConn);

//echo $SQL;
echo $id."|".Quita($titol);
?> 