<?php
include("../rao/sas_con.php");

$id = $_GET["id"];

$SQL = "DELETE FROM Users WHERE IdUser = $id";
$result = mysql_query($SQL,$oConn);


//echo $SQL;
?>