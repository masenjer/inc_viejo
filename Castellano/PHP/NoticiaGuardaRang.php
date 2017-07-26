<?php
include("../rao/sas_con.php");
include("CS.php"); 

if (CS())
{
	$id = $_POST["id"];
	$r = $_POST["r"];
	
	if (!$r) $r = "NULL";
	
	$SQL = "UPDATE Noticias SET Rang = ".$r." WHERE IdNoticia =" . $id;
	$result = mysql_query($SQL,$oConn);
	
	echo $SQL;
}
else echo "4055";
?>