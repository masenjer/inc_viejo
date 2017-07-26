<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$SQL = "UPDATE Web SET WebColor = ''";
$result = mysql_query($SQL,$oConn);

?>