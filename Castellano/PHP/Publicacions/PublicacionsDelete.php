<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$id = Pon($_POST["id"]);

$SQL = "DELETE FROM Publicacions WHERE IdPublicacions = ".$id;
$result = mysql_query($SQL,$oConn);

?>