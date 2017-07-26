<?php 
	header('content-type:text/css');
	
	include ("../rao/sas_con.php"); 
	$SQL = "SELECT * FROM Web ";
	$result = mysql_query($SQL,$oConn);
	 
	while ($row = mysql_fetch_array($result)){
		$color = "#".$row["WebColor"];
	}
?>
body{
	vertical-align:middle;
	text-align:center;
	font-family:Verdana, Geneva, sans-serif;
	margin:0 0 0 0;
	border-spacing:none;
} 

#TableOmbres{
	padding:0;
	border-spacing:none;
	border:none;
	border-collapse:collapse;
		
}

#portfolio {
	list-style:none;
	margin:0;padding:0;}


.FondoBody
{
	background-color:#9a9899;
}

a
{
	text-decoration:none;
	color:#000;	
}

.APeca
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#d7d8da;
	cursor:pointer;
	font-weight:bold;	
				
}

.AMidi
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	color:#d7d8da;
	cursor:pointer;	
	font-weight:bold;	
}

.AGran
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	color:#d7d8da;
	cursor:pointer;	
	font-weight:bold;	
}


#Fondo
{
	top:0;
	left:0;
	position:fixed;
	width:100%;
	height:100%;
	z-index:-50;
}

#FondoAdmin
{
	top:0;
	left:0;
	position:fixed;
	width:100%;
	height:100%;
	z-index:-50;
}

.ButtonMS
{
	font-family:Verdana, Geneva, sans-serif;	
	font-size:0.60rem;
	font-weight:bold;
	color:#FFF;
	vertical-align:middle;
	text-align:center;
	cursor:pointer;
	
	padding-left:5px;
	padding-right:5px;
	border:solid;
	border-width:1px;
	border-color:#999;
    background-color:#333;
    height:28px;
    width:100%;
	
	background-image:URL(../img/CapcaRelleu2.png);
}

.ButtonMS:hover{
	background-color:<?php echo $color; ?>;
}

.ButtonMS:active{
	background-color:#999;
}

.ButtonMS a{
	text-decoration:none;
	color:#FFF;}

.DIVnuS
{
	text-align:center;
	cursor:pointer;
	display:inline;	
}

.ImageMS
{
	width:24px;
	height:24px;
	border:0;
	padding:0;
	cursor:pointer;	
}
#ImageML
{
	width:16px;
	height:16px;
	border:0;
	padding:0;
	cursor:pointer;	
}

.fuenteTitolML /* Titol Menu Esquerre */
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:<?php echo $color; ?>;
	
	background-color:#f3f3f3;
}

.fuenteML
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:#666;
	cursor:pointer;
	background-color:#f3f3f3;
}

.fuenteTitolML_Contrast /* Titol Menu Esquerre */
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	font-weight:bold;
	color:<?php echo $color; ?>;
}

.fuenteML_Contrast
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:#000;
	cursor:pointer;
}

.fuenteTitolMD /* Titol Menu Esquerre */
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	background-color:<?php echo $color; ?>;
	color:#FFF;
	background-image:url(../img/CapcaRelleu.png); 
	border-style:solid;
	border-width:1px;
	border-color:<?php echo $color; ?>;
	height:25px;
	padding-left:5px;
	padding-right:5px;
	cursor:pointer;
}

.fuenteMD
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#666;
	background-color:#f3f3f3;
}

.fuenteTitolContingut
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	font-weight:bold;
	color:<?php echo $color; ?>;
	text-align:left;
}

.fuenteContingut
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#666;
}

.fuenteContingut table
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#666;
}

#DIVRutaPage
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;	
	color:#999;
}

.fuenteCercador
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;	
	color:#666;
}


.RutaCercador
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:9px;	
	color:<?php echo $color; ?>;
	cursor:pointer;
	font-weight:bold;
}

#ButtonEditContingut
{
	width:32px;
	height:32px;
	border:0;
	background:url(../img/ButtonEditContingut.png);
	cursor:pointer;
}

#TAContingut
{
	width:100%;
	height:100%;
	background-color:#C93
}

#TANoticia
{
	width:100%;
	height:100px;
}

.fuenteTituloGestionNoticias
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	font-weight:bold;
	color:#000;
}

.fuenteGestionNoticia
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#000;
}

#ButtonNoticiaGuarda
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/ButtonNoticiaGuarda.png);
	cursor:pointer;
}

#ButtonNoticiaElimina
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/ButtonNoticiaElimina.png);
	cursor:pointer;
}

#ContListNoticias
{
	width:209px;
	height:498px;
	border:0;
	background:url(../img/FondoLisNoticias.png);
}

.fuenteLinNoticia
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#000;
	cursor:pointer;
}

#DIVConfirmaEliminaNot
{
	display:none;
	width:204px;
	height:29px;
	background:url(../img/ConfirmaEliminaNot.png);
	vertical-align:middle;
		
}

#ButtonAcceptElimina
{
	width:19px;
	height:19px;
	border:0;
	background:url(../img/accept.png);
	cursor:pointer;
}

#ButtonCancelaElimina
{
	width:19px;
	height:19px;
	border:0;
	background:url(../img/cancel.png);
	cursor:pointer;
}

.LinNoticia
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#666;
	text-align:justify;
}

#DIVGU
{
	position:fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;		
	background:url(../img/NegroTrans.png); 
	display:none;
}

#DIVGridGU
{
	width:640px; 
	height:200px; 
	overflow:hidden;	
}


/*---------------------------------------------------- Grid           */

.CapGrid
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;	
}



/*---------------------------------------------------------------------- */

#DIVEliminaUser
{
	display:none;
		
}

#DIVBotoGU
{
	display:none;		
}

#TancaSessio
{
	height:40px; 
	vertical-align:middle;	
	display:none;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	color:#F00;
	cursor:pointer;
}

.crd
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
	font-weight:bold;
	vertical-align:middle;
	text-decoration:none;	
}






/*--------------------------------------Maquetacio dura------------------------------------*/



.TOTALOmbraDretaCentral
{
	width:62px;
	background-image:URL(../img/TOTALOmbraDretaCentral.jpg);
}

.PeuPagina
{
	background-image:URL(../img/PeuPagina.jpg);
	height:144px;
    background-size:100% 100%;
}

.TOTALOmbraSupEsq
{
	width:15px;
	height:15px;
	background-image:URL(../img/TOTALOmbraSupEsq.png);
	background-position:bottom;
	background-repeat:repeat-x;
}

.TOTALOmbraSupCentral
{
	height:15px;
	background-image:URL(../img/TOTALOmbraSupCentral.png);
	background-position:bottom;
	background-repeat:repeat-x;
}
.TOTALOmbraSupDreta
{
	width:15px;
	height:15px;
	background-image:URL(../img/TOTALOmbraSupDreta.png);
	background-position:bottom;
	background-repeat:no-repeat;
}

.TOTALOmbraEsquerra
{
	width:15px;
	background-image:URL(../img/TOTALOmbraEsquerra.png)
}

.TOTALOmbraDreta
{
	width:15px;
	background-image:URL(../img/TOTALOmbraDreta.png)
}


.TOTALOmbraInfEsq
{
	width:15px;
	height:15px;
	background-image:URL(../img/TOTALOmbraInfEsq.png);
	background-repeat:repeat-x;
}

.TOTALOmbraInfCentral
{
	height:15px;
	background-image:URL(../img/TOTALOmbraInfCentral.png);
	background-repeat:repeat-x;
}

.TOTALOmbraInfDreta
{
	width:15px;
	height:15px;
	background-image:URL(../img/TOTALOmbraInfDreta.png);
	background-repeat:no-repeat;
}

.CapcaSuperiorPage
{
	background-image:URL(../img/CapcaSuperiorPage.jpg)
}

.FonsMenuSupButton
{
	background-image:URL(../img/FonsnuSupButton.jpg)
}

.FonsMenuSupInterButtonGris
{
	background:#d0d0ce;
	background-image:URL(../img/FonsMenuSupInterButtonGris.jpg);
	background-repeat:repeat-x;
}

#FonsMenuSupInterButtonGris{
	width:100%;
}

.RayaGris
{
	background-color:#dadada;
}

.FonsMenuEsquerre
{
	background-color:#f3f3f3;
}

.OmbraInferiorMenuS
{
	height:7px;
	background-image:URL(../img/OmbraInferiorMenuS.png)
}

.CapcaNoticies
{
	height:25px;
	background-image:URL(../img/CapcaNoticies.jpg)
}


.SI-FILES-STYLIZED label.cabinet
{
	cursor:pointer;
	width: 209px;
	height: 29px;
	background: url(../img/AnadirFicheroButton.png) 0 0 no-repeat;
	
	display: block;
	overflow: hidden;
}

.SI-FILES-STYLIZED label.cabinet input.file
{
position: relative;
cursor:pointer;
height: 100%;
width: auto;
opacity: 0;
-moz-opacity: 0;
filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
cursor:pointer;
}

#ButtonDestacatGuarda
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/AnadirDestacado.png);
	cursor:pointer;
}

#ButtonDestacatElimina
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/EliminarDestacado.png);
	cursor:pointer;
}

#ButtonEnDirGuarda
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/AnadirEnlace.png);
	cursor:pointer;
}

#ButtonEnDirElimina
{
	width:209px;
	height:29px;
	border:0;
	background:url(../img/EliminarEnlace.png);
	cursor:pointer;
}

.TitolHome 
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;
	color:#FFF;	
	font-weight:bold;
	vertical-align:top;
	background-color:<?php echo $color; ?>;
	border: 1px solid <?php echo $color; ?>;
}

.fuenteEnDirHome
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:#666;
	cursor:pointer;
}

.CaixaContacte{
	border-style:solid;
	border-width:1px;
	border-color:#d7d8da;
	padding-left:5px;
	padding-right:5px;	
}

.TitolContacteHome
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
	color:#666;
	font-weight:bold;	
}

.fuenteContacteHome
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:9px;	
	color:#666;
	text-align:left;
}

.InfoContacteHome
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:9px;	
	color:#666;
	font-weight:bold;
	cursor:pointer;
}

#portfolio{
	cursor:pointer;
}


.TitolMapaWeb
{
	font-family:Verdana, Geneva, sans-serif;	
	font-size:11px;
	font-weight:bold;
	color:#FFF;
	vertical-align:middle;
	text-align:center;
	cursor:pointer;	
	border-style:solid;
	border-width:1px;
	border-color:<?php echo $color; ?>;
	background-color:<?php echo $color; ?>;
	height:25px;
}

.fuenteMapaWeb
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	color:#666;
	cursor:pointer;
}

a:link.OpcionsContingut
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	text-decoration:none;
	color:#444;
	text-height:13px;
}

a:visited.OpcionsContingut
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	text-decoration:none;
	color:#444;
	text-height:13px;
}

.ButtonDelete
{
	border:none;
	background:url(../img/Delete.jpg);
	cursor:pointer;
	width:32px;
	height:32px;
}

.ButtonSave32
{
	border:none;
	background:url(../img/Save32.jpg);
	cursor:pointer;
	width:32px;
	height:32px;
}

.InfoColor{
	color:#ffffff;
	font-family:Verdana, Geneva, sans-serif;
	font-size:9;
	padding:5px;
}

.fuenteInfoDROW
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	color:#FFF;
	font-weight:bold;
	padding-left:28px;
	padding-right:10px;
	height:36px; 
	width:220px; 
	background-image:URL(../img/FonsTitolDROW.png);
}

.PertanyUAB_0
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	color:#FFF;
	font-weight:bold;
	padding-left:28px;
	padding-right:10px;
	height:26px; 
	width:156px; 
	background-image:URL(../img/PertanyUAB_0.png);
	vertical-align:middle;
	padding-top:10px;
}

.PertanyUAB_1
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;	
	color:#FFF;
	font-weight:bold;
	padding-left:28px;
	padding-right:10px;
	height:26px; 
	width:156px; 
	background-image:URL(../img/PertanyUAB_1.png);
	vertical-align:bottom;
	padding-top:10px;

}

.TancaFormButton
{
	width:45px;
	background-image:URL(../img/TancarForm.jpg);
	cursor:pointer;
		
}

.fontPeuPagina
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
	text-decoration:none;
	color:#FFF;
}


#NewIMGHome
{
	border:none;
	background-image:URL(../img/plus.jpg);
	background-color:none;
	width:32px;
	height:32px;
	cursor:pointer;	
}


.ButtonRIGHT32
{
	border:none;
	background:url(../img/Right32.jpg);
	cursor:pointer;
	width:32px;
	height:32px;
}


.ButtonLEFT32
{
	border:none;
	background:url(../img/Left32.jpg);
	cursor:pointer;
	width:32px;
	height:32px;
}

.fuenteTitolMenuPageOculta /* Titol Menu Esquerre */
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:#C00;
	
	background-color:#aaa;
}

.fuenteMenuPageOculta
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:11px;	
	font-weight:bold;
	color:#FFF;
	cursor:pointer;
	background-color:#aaa;
}

.OrdenML{
	width:16px; 
	height:32px; 
	vertical-align:middle;
	padding:0;
	margin:0;
	border:1px solid #bbb;	
}


.OrdenMO{
	width:16px; 
	height:16px; 
	vertical-align:middle;
	padding:0;
	margin:0;
	border:1px solid #bbb;	
}


#MPaginesOcultes{
	height:500px;
	overflow-y:auto;
	aoverflow-x:none;
}
