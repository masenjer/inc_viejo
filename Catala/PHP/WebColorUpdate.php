<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$color = $_GET["color"];

$SQL = "UPDATE Web SET WebColor = '".$color."'";
$result = mysql_query($SQL,$oConn);

//echo $SQL;
echo $color;// $contingut;//."|".$IdLin;
?>