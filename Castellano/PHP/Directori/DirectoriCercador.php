<?php
include("../../rao/PonQuita.php"); 
include("DirectoriCercadorPrivat.php"); 
include("DirectoriCercadorPublic.php"); 
include("DirectoriComptadorResultats.php"); 
include("CategoriaDirectoriCargaSelect.php"); 

session_start();

$Conn = "../../rao/sas_con.php";

$text = Pon($_POST["txt"]);

$idC = Pon($_POST["idC"]);
//if (!$idC) $idC = '';

$txt = explode(" ",$text);

if ($_SESSION["Edicio"]=="1") echo MostraDirectoriPrivat($txt,$Conn, $idC);
else if ($text)echo MostraDirectoriPublic($txt,$Conn, $idC);

//if ($text)MostraDirectoriPublic($txt);

?>