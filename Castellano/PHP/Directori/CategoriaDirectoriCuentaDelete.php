<?php

error_reporting (5); 
include("../../rao/PonQuita.php"); 
include("../../rao/sas_con.php"); 

ini_set('session.cache_expire',3);
ini_set("session.gc_maxlifetime",3);
session_start();

$idCat = $_POST["IdCat"];

$cuenta = 0;

$SQL = "SELECT COUNT(*) as Cuenta FROM Directori WHERE IdDirectoriCategoria = ".$idCat;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result)){
	$cuenta = $row["Cuenta"];	
}

echo $idCat."|".$cuenta;
?>