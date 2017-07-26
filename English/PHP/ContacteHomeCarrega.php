<?php
include("../rao/sas_con.php");

ini_set("session.gc_maxlifetime",3);
session_start();

$permiso="";
$colsp=5;


if ($_SESSION["Noticias"]=="1")
{	
	$permiso = '<button class="EditButton" onClick= "CarregaContacteEdicio();">';
	$colsp = 3;
}


$SQL = "SELECT * FROM Contacte WHERE  IdSite =".$_SESSION["IdSite"]." ";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%"  cellpadding="0" cellspacing="0" border="0">';

	
$resultado .='	
	<tr>
		<td colspan="'.$colsp.'" valign=middle" style="width:188px ;height:25px; background-color:#a81f24; border: 1px solid #a81f24; " class="TitolHome"> 
			<div  style="width:198px;height:20px; text-align:center; vertical-align:middle; background-image:url(img/CapcaRelleu.png); background-repeat:repeat-x; padding-top:5px;">
				CONTACT WITH US
			</div>
		</td>';

if ($permiso)$resultado.='<tr><td colspan="2" align="right"><div>'.$permiso.'</div></td></tr>';

	$resultado.='</tr>
	<tr>
		<td class="CaixaContacte">
			<table>
	';

while ($row = mysql_fetch_array($result))
{
	$accion = ' onClick="CarregaEnllacIntern(\''.$row["URL"].'\');"'; 
	 
	$resultado = $resultado . '
				<tr valign="middle">					
					<td height="20px" align="justify" class="TitolContacteHome">'.$row["Titol"].'</td>
							
				</tr>
				<tr valign="middle">					
					<td height="20px" align="justify" class="fuenteContacteHome">'.$row["Contingut"].'</td>						
				</tr>';
				/*
				<tr valign="middle">					
					<td height="20px" align="right" '.$accion.' class="InfoContacteHome"> Telèfons i horari	</td>					
				</tr>';
				*/
}

mysql_close($oConn);

$resultado = $resultado . '
	
			</table>
		</td>
	</tr>	
</table>';

echo $resultado;
?>
