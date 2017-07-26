<?php
include("../rao/sas_con.php");

$IdCat = $_GET["IdCat"];

$SQL = "DELETE FROM DirectoriCategoria WHERE IdDirectoriCategoria = " . $IdCat; 
$result = mysql_query($SQL,$oConn);

echo $idCap;//."|".$IdLin;
?>