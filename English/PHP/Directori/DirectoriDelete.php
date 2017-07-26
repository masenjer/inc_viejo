<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$id = Pon($_POST["id"]);

$SQL = "SELECT Imatge FROM Directori WHERE IdDirectori = ".$id;	
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	if(file_exists("../../../imgDirectori/".$row["Imatge"])) unlink("../../../imgDirectori/".$row["Imatge"]);
}


$SQL = "DELETE FROM Directori WHERE IdDirectori = ".$id;

$result = mysql_query($SQL,$oConn);


?>