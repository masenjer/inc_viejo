<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$SQL = "UPDATE Web SET WebColor = ''";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


?>