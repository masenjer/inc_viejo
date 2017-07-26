<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
session_start();

$SQL = "SELECT * FROM Contacte WHERE  IdSite =".$_SESSION["IdSite"]." ";
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$T = $row["Titol"];
	$C = $row["Contingut"];
	$U = $row["URL"];
}

mysql_close($oConn);

echo $T."*****".$C."*****".$U;

?>