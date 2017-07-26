<?php
include("../rao/sas_con.php");

ini_set("session.gc_maxlifetime",3);
ini_set('session.cache_expire',3);
session_start();

$cuenta = 1;

$SQL = "SELECT * FROM CapMenu WHERE IdSite = ".$_SESSION["IdSite"]." order by Orden";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="FonsMenuSupInterButtonGris">
<tr>
<td>
<table  id="FonsMenuSupInterButtonGris" cellpadding="0" cellspacing="0" border="0">
	<tr valign="middle">
		<td width="12px"></td>
		<td id="RayaGris" width="1px">
			';

while ($row = mysql_fetch_array($result))
{
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////   Busco si hay una cual es la primera página de LinMenu para direccionar en href,
////////////////   si está vacío pongo direccion al propio menú

$direccion = "";

$SQL2 = "SELECT * FROM LinMenu WHERE IdCapMenu = ".$row["IdCapMenu"]." and tipus = 1 order by Orden ASC LIMIT 1";
$result2 = mysql_query($SQL2,$oConn);

while ($row2 = mysql_fetch_array($result2))
{
	$direccion = 'index.php#!/'.$row2["Titol"].'_'.$row2["IdLinMenu"].'_1';
}

if (!$direccion) $direccion = 'index.php#!/MS_'.$row["IdCapMenu"];



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$resultado = $resultado . '
	
		<td>
			<input type="hidden" id="tdMSAntic'.$row["IdCapMenu"].'" value="'.$row["Titol"].'">
		</td>';
		
	$resultado = $resultado . '  
		<td id="tdMS'.$row["IdCapMenu"].'"  align="left">
			
			<a href="'.$direccion.'">
				<button class="ButtonMS"><div id="DIVTitolMS'.$row["IdCapMenu"].'" class="DIVMenuS">'.$row["Titol"].'</div></button>
			</a>
			
			
		</td>';	
		
	if ($_SESSION["Creacio"]=="1")
	{
		$resultado = $resultado . '<td style="vertical-align:middle;"> 
			<table height="32px" cellpadding="0" cellspacing="0" border="0" >
				<tr>
					<td height="17px" valign="top"><button class="EditButton" onClick="EditaTitolMS('.$row["IdCapMenu"].')"/></td>
					<td rowspan="2">
						<input class="OrdenML" type="text"  id="OrdenMS'.$row["IdCapMenu"].'" value="'.$row["Orden"].'"  style="vertical-align:bottom" onKeyPress="submitenter(6,event,'.$row["IdCapMenu"].')"></td>						
				</tr>
				<tr>
					<td><button class="LinMenuDeleteButton" onClick="MostraEliminaTOT(0,'.$row["IdCapMenu"].');" style="vertical-align:top"/></td>
				</tr>
			</table>
		</td>
	';
	}
	
	$resultado.= '		<td width="2px"></td>';

/////////////////////////////////////////////////////////////////////////////////////////////////
/* 
	if ($_SESSION["Creacio"]=="1")
	{
		$DobleClic = 'ondblclick="EditaTitolMS('.$row["IdCapMenu"].')"';	
		
		$delete = '<td align="left" width="19px"><input type="text" style="height:21px;width:21px;vertical-align:middle;" id="OrdenMS'.$row["IdCapMenu"].'" value="'.$row["Orden"].'"  onKeyPress="submitenter(6,event,'.$row["IdCapMenu"].')"><img id="ImageMS" src="img/delete.jpg" onClick="MostraEliminaTOT(0,'.$row["IdCapMenu"].');"  style="vertical-align:middle; height: 24px;"></td>';
		$stilo = 'style="background-image:URL(img/CapcaRelleu2.png);"';
	}
	else
	{
		$stilo = 'style="background-image:URL(img/CapcaRelleu2.png);"';	
	}

	$resultado = $resultado . '
		<td bgcolor="#333333" class="ButtonMS" '.$stilo.'  height="28px" id="tdMS'.$row["IdCapMenu"].'"  align="left">
			<a href="index.php#!/MS_'.$row["IdCapMenu"].'" '.$DobleClic.'>
			<input type="hidden" id="tdMSAntic'.$row["IdCapMenu"].'" value="'.$row["Titol"].'">
			<div id="DIVTitolMS'.$row["IdCapMenu"].'" class="DIVMenuS">'.$row["Titol"].'</div></a></td>
			
		
		'.$delete.'
		<td width="2px"></td>
';
*/
}

mysql_close($oConn);




		
		///Botó del directori	
		$resultado = $resultado . '
		<td  align="left">
			<a href="Directori.php">
			<button class="ButtonMS">INc Directory</button>
			</a>
		</td>
		<td width="2px"></td>

';



/*///Botó del publicacions	
		$resultado = $resultado . '
		<td bgcolor="#333333" class="ButtonMS" '.$stilo.'  height="28px" id="tdMSPublicacions" onClick="MostraPublicacions();" align="left">
			<div id="DIVTitolMSPublicacions" class="DIVMenuS">Publicacions</div>
		</td>
		<td width="2px"></td>

';
*/

/////////////////////////////////////////////////////Boton nou MS i GU

$resultado = $resultado . 
			'<td width="12px" style="padding-right:2px">
					<table cellpadding="0" cellspacing="0" border="0">';

		
if ($_SESSION["Creacio"]=="1")
{
	$resultado .= 	'
		<tr>	
			<td colspan="2" align="right">
				<button class="PlusButton" onclick="NovaMS();"/>
			</td>
		</tr>			';
}

if ($_SESSION["Usuarios"]=="1")
{
	$resultado .= 	'
		<tr>    	
			<td><button class="GUButton" onclick="MostraGestioGU();"/> </td>
		</tr>';
}

$resultado .= '</table>
			</td>';

	
			
		$resultado .= '
		</tr>
	</table>
	</td>
	</tr>
	</table>
	
	<input type="hidden" id="CuentaMS" value="'.$cuenta.'">';
	

/////////////////////////////////////////////////////Boton nou MS i GU	


echo $resultado;
?>