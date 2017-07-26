<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$color = $_GET["color"];

$SQL = "UPDATE Web SET ButtonsColor = '".$color."'";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 

//echo $SQL;
echo $color;// $contingut;//."|".$IdLin;
?>