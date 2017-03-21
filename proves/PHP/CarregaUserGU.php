<?php
include("../rao/sas_con.php");

$id = $_GET["id"];

$SQL = "SELECT * FROM Users WHERE IdUser = ".$id;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$N = $row["Nom"];
	$C = $row["Cognoms"];
	$E= $row["Email"];
	$U = $row["User"];
	$P = $row["Password"];
	$R1 = $row["Usuarios"];
	$R2 = $row["Creacio"];
	$R3 = $row["Edicio"];
	$R4 = $row["Noticias"];
	
	
}

mysql_close($oConn);

echo $N."|".$C."|".$E."|".$U."|".$P."|".$R1."|".$R2."|".$R3."|".$R4."|".$id;

?>