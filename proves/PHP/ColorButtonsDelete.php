<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$SQL = "UPDATE Web SET ButtonsColor = ''";
$result = mysql_query($SQL,$oConn);

?>