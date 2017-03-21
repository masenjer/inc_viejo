<?php
include("../../rao/sas_con.php"); 
include("../../rao/PonQuita.php"); 
include("PublicacionsCercadorPrivat.php"); 
include("PublicacionsCercadorPublic.php"); 
include("PublicacionsComptadorResultats.php"); 

session_start();

$text = Pon($_POST["txt"]);
$tipus = Pon($_POST["tipus"]);

$txt = explode(" ",$text);

if ($_SESSION["Edicio"]=="1") MostraPublicacionsPrivat($txt,$tipus);
else if($text) MostraPublicacionsPublic($txt,$tipus);

?>