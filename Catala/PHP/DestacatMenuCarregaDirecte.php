<?php
include("rao/sas_con.php");

ini_set("session.gc_maxlifetime",3);
session_start();


$SQL = "SELECT * FROM Destacat WHERE IdSite =".$_SESSION["IdSite"]." order by Orden ASC";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%"  cellpadding="0" cellspacing="0" border="0" class="fuenteLinNoticia">';

	if (($_SESSION["Noticias"]=="1") && ($_GET["h"]=='1'))
	{	
		$resultado = $resultado.'<tr><td align="right" height="25px"><button class="EditButton" onClick="AbreGestorDestacats();"></td></tr><tr>';
	}

while ($row = mysql_fetch_array($result))
{
	$resultado = $resultado . '
	<tr valign="middle">';

		if ($row["TipusEnllac"] == 1)
		{
			$cadena = explode("|",$row["URL"]);
			
			$SQLNom = "SELECT Titol FROM LinMenu WHERE IdLinMenu = ".$cadena[1];
			$resultNom = mysql_query($SQLNom,$oConn); 
			while ($rowNom = mysql_fetch_array($resultNom)){
				$TitolNom = $rowNom["Titol"];
			}			
			
			$accion = ' href="#!/'.$TitolNom.'_'.$cadena[1].'_1" title = "'.$TitolNom.'"'; 
		}else
		{
			if ($row["TipusEnllac"] == 2) 	$accion = ' href="'.$row["URL"].'" target="_blank"'; 
			else $accion = ' href="Documents/'.$row["URL"].'" target="_blank"'; 
		}
		
	if($row["FormatBoto"] == 1)
	{

		
		$resultado = $resultado . '
		
			<td><div style="width:200px;height:43px" id="MenuDestacats'.$row["IdDestacat"].'"><a '.$accion.'><img src="ImgDes/'.$row["Imatge"].'"></a></div></td>		
		</tr>';
	}	
	else
	{	
		$resultado = $resultado . '
			<td height="41px" id="MenuDestacats'.$row["IdDestacat"].'" '.$accion.' >						
				<a '.$accion.'>'.CreaDestacatButton($row["Imatge"]).'</a>
			</td>		
		</tr>';
	}
	
	$primero = false;	
	
//	if ($_GET["h"]=='1')	
//	{
//	$resultado = $resultado . '<tr><td height="10px"></td></tr>	';		
//	}
}

mysql_close($oConn);


$resultado = $resultado . '<tr><td height="15px"></td></tr>';
//$resultado = $resultado . '<tr><td height="10px"></td></tr>';

if ($_GET["h"]!='1')	
	{
		$resultado = $resultado . '<td></td>';
	}

//$resultado = $resultado . '<tr><td height="15px"></td></tr>';

$resultado = $resultado . '	
</table>';

echo $resultado;

function CreaDestacatButton($cadena)
{
	session_start;
	
	$c = explode("|",$cadena);

	if ($_SESSION["ButtonsColor"])
	{
		$color1 = "#".$_SESSION["ButtonsColor"];
		$color2 = "#FFFFFF";
	}
	else
	{
		$color1 = $c[0];
		$color2 = $c[1];
	} 


	return '

	<table cellspacing="0" cellpadding="0" border="0">
	  <tr valign="middle">
		  <td>
			  <div class="DestacatButton" style="width:198px;height:41px; background-color:'.$color1.'; border: solid 1px '.$color1.'; ">
				  <div style="width:100%;height:41px;background:URL(img/MaskButton.png);">
					  <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
						  <tr valign="middle">
							  <td width="100%" height="100%" valign="middle" align="center">
								  <div class="DivTextButtonProva" style="color:'.$color2.';">'.$c[2].'</div>
							  </td>
						  </tr>
					  </table>
			  </div></div>
		  </td>
	  </tr>	
  </table> 
';	
}
?>
