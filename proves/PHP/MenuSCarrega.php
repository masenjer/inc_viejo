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
	 $cuenta ++;
 
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
		<td bgcolor="#333333" class="fuenteMS" '.$stilo.'  height="28px" id="tdMS'.$row["IdCapMenu"].'"  align="left">
			<a href="index.php#!/MS_'.$row["IdCapMenu"].'" '.$DobleClic.'>
			<input type="hidden" id="tdMSAntic'.$row["IdCapMenu"].'" value="'.$row["Titol"].'">
			<div id="DIVTitolMS'.$row["IdCapMenu"].'" class="DIVMenuS">'.$row["Titol"].'</div></td>
			</a>
		
		'.$delete.'
		<td width="2px"></td>
';
}

mysql_close($oConn);

$add= "";
		
if ($_SESSION["Creacio"]=="1")
{
	$add = 	'
		<tr>	
			<td colspan="2" align="right">
				<img class="ImageMS" src="img/plus.jpg" onClick="NovaMS()">
			</td>
		</tr>			';
			
	$GU = '';
		
}

		
		///Botó del directori	
		$resultado = $resultado . '
		<td bgcolor="#333333" class="fuenteMS" '.$stilo.'  height="28px" id="tdMSDirectori"  align="left">
			<a href="Directori.php">
			<div id="DIVTitolMSDirectori" class="DIVMenuS">Directori</div>
			</a>
		</td>
		<td width="2px"></td>

';

/*///Botó del publicacions	
		$resultado = $resultado . '
		<td bgcolor="#333333" class="fuenteMS" '.$stilo.'  height="28px" id="tdMSPublicacions" onClick="MostraPublicacions();" align="left">
			<div id="DIVTitolMSPublicacions" class="DIVMenuS">Publicacions</div>
		</td>
		<td width="2px"></td>

';
*/

	$resultado = $resultado . 
			'<td width="12px" style="padding-right:2px">
				<div id="DIVBotoGU">
					<table cellpadding="0" cellspacing="0" border="0">
						'.$add.'
						<tr>    	
							<td><img class="ImageMS" src="img/GU.jpg" onclick="MostraGestioGU();"/></td>
						</tr>
					</table>
				</div>
			</td>';
	
			
		$resultado .= '
		</tr>
	</table>
	
	<input type="hidden" id="CuentaMS" value="'.$cuenta.'">';


echo $resultado;
?>

