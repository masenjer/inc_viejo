<?php session_start(); 
header('Content-Type: text/html; charset=utf-8');
$_SESSION["IdSite"] = 2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("Includes/IncludesPHP.php");?>
<head>

    	
	<?php //include("PHP/ColorsCanviaGlobal.php");?>
<?php include("Includes/IncludesCSS.php");?>
<title>Institut de Neuroci&egrave;ncies UAB</title>
<meta name="description" content="Research Institute that investigates the key issues about the brain in a  multidisciplinary and translational way with the goal of developing new therapies to treat brain diseases." /> 	
<?php include("Includes/IncludesJS.php");?>
</head>
<meta name="Description" content="neurodegeneració, la neuroregeneració i les bases de la ment normal o trasbalsada">



<body onload="CarregaPagina()" class="FondoBody">
<?php include "AvisoCookies.php"; ?>
<?php include_once("../analyticstracking.php") ?>

<script>
//alert(document.documentMode);   ////Document mode de internet explorer para saber como lo interpreta

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'es',
    autoDisplay: false,
    floatPosition: google.translate.TranslateElement.FloatPosition.TOP_RIGHT
  });
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<?php 
	MostraMenuLateralDerecho();
	MostraMenuColor();
?>

<input type="hidden" id="primerDIV" value="0" />



<table width="928px" id="TableOmbres" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
    	<td class="TOTALOmbraSupEsq"></td>
    	<td class="TOTALOmbraSupCentral"></td> 
    	<td class="TOTALOmbraSupDreta"></td>
    </tr>
	<tr>
    	<td class="TOTALOmbraEsquerra"></td>
    	<td style="border:1px solid #666;"><?php CarregaAplicacio(); ?></td>
    	<td class="TOTALOmbraDreta"></td>
    </tr>
	<tr>
    	<td class="TOTALOmbraInfEsq"></td>
    	<td class="TOTALOmbraInfCentral"></td>
    	<td class="TOTALOmbraInfDreta"></td>
    </tr>
    <tr>
    	<td colspan="6" align="center" valign="middle" class="fontPeuPagina">
        	<table>
            	<tr>
                	<td align="center" class="fontPeuPagina">
                    	<table>
                        	<tr>
                            	<td style="cursor:pointer" onClick="HomeCarrega();" class="fontPeuPagina"> 
                                	Inici
                                </td>
                                <td class="fontPeuPagina">|</td>
                            	<td style="cursor:pointer" onClick="MostraMapaWeb();" class="fontPeuPagina"> 
                                	Mapa del web
                                </td>
                                <td class="fontPeuPagina">|</td>
                                <td>
                                	<a href="http://crd.uab.cat" class="fontPeuPagina" target="_blank">Sobre el web</a>
                                </td>
                            </tr>
                        </table>                    	
                    </td>
                </tr>
                <tr>
                	<td height="15px"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>





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
?>


</body>
</html>
