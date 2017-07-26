<?php 

session_start(); 
header('Content-Type: text/html; charset=utf-8');

$_SESSION["IdSite"] = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include("Includes/IncludesPHP.php");?>
<head>
	<?php //include("PHP/ColorsCanviaGlobal.php");?>
<?php include("Includes/IncludesCSS.php");?>
<title>Institut de Neuroci&egrave;ncies (INc) - UAB Barcelona</title>
<meta name="description" content="Institut de recerca  que investiga les qüestions clau del cervell de forma multidisciplinar i translacional amb l’objectiu de desenvolupar noves teràpies per al tractament de patologies cerebrals." />   	
<?php include("Includes/IncludesJS.php");?>
</head>

<body onLoad="CarregaPagina()" class="FondoBody"  onClick="$('#ResultatCerca').hide('slow')">
<?php // include "AvisoCookies.php"; ?>
<?php include_once("../analyticstracking.php") ?>

<?php 
	//MostraMenuLateralDerecho();
	MostraMenuColor();
?>

<input type="hidden" id="primerDIV" value="0" />

<?php CarregaAplicacio(); ?>






<?php
	CompruebaPermisosEdicion();
	CompruebaPermisosEdicionIMGHome();
	if ($_SESSION["Usuarios"] == 1) MostraGU();
	if ($_SESSION["Noticias"] == 1)
	{    
		MostraGestioNoticies(); 
		MostraGestioDestacats();
		MostraGestioEnDir();
		MostraGestioContacte();
	}
	if ($_SESSION["Creacio"] == 1) MostraEliminar();

	MostraFormulariEmail();
	//MostraDossierNoticies();
?>


</body>
</html>
