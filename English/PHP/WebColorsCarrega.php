<?php
include("../rao/sas_con.php");
 


$SQL = "SELECT * FROM Web ";
$result = mysql_query($SQL,$oConn);
 
while ($row = mysql_fetch_array($result)){
	echo $row["WebColor"]."|".$row["ButtonsColor"];
}

mysql_close($oConn);

?>
