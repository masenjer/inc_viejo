<?php
include("../../rao/sas_con.php");
include("../../rao/PonQuita.php");

$id = Pon($_POST["id"]);

$SQL = "DELETE FROM Publicacions WHERE IdPublicacions = ".$id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


?>