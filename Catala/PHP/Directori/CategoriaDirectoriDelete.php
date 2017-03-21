<?php
include("../../rao/sas_con.php");

$IdCat = $_POST["IdCat"];

$SQL = "UPDATE Directori SET IdDirectoriCategoria = NULL WHERE IdDirectoriCategoria = ".$IdCat;
$result = mysql_query($SQL,$oConn);

$SQL = "DELETE FROM DirectoriCategoria WHERE IdDirectoriCategoria = " . $IdCat; 
$result = mysql_query($SQL,$oConn);

echo $idCap;//."|".$IdLin;
?>