<?php
include("rao/sas_con.php");

$SQL = "SELECT * FROM Web ";
$result = mysql_query($SQL,$oConn);
 
while ($row = mysql_fetch_array($result)){
	
	$_SESSION["WebColor"]=$row["WebColor"];
	$_SESSION["ButtonsColor"]=$row["ButtonsColor"];
}

mysql_close($oConn);

?>
