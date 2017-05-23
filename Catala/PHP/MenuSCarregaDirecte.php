<?php
include("rao/sas_con.php");

ini_set("session.gc_maxlifetime",3);
ini_set('session.cache_expire',3);
session_start();

$cuenta = 1;

$SQL = "SELECT * FROM CapMenu WHERE IdSite = ".$_SESSION["IdSite"]." order by Orden";
$result = mysql_query($SQL,$oConn);


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
	
	echo  '
	
		<li class="dropdown">
			<input type="hidden" id="tdMSAntic'.$row["IdCapMenu"].'" value="'.$row["Titol"].'">
		';
		
	echo  '  
		
			
			<a href="'.$direccion.'">
				'.$row["Titol"].'
			</a>
			
			
		';	
		
	if ($_SESSION["Creacio"]=="1")
	{
		echo  '
			<div class="row">
				<div class="col-md-2">
					<button class="EditButton" onClick="EditaTitolLPage('.$row["IdLinMenu"].')"/>			
				</div>
				
				<div class="col-md-2">	<input class="OrdenML" type="text"  id="OrdenME'.$row["IdLinMenu"].'" value="'.$row["Orden"].'"  onKeyPress="submitenter(5,event,'.$row["IdLinMenu"].');" >
				</div>
				<div class="col-md-2">
					<button class="LinMenuDeleteButton" onClick="MostraEliminaTOT(1,'.$idCap.','.$row["IdLinMenu"].');"/>
				</div>
			</div>
	';
	}
	
	echo '		</li>';

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

	echo  '
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

echo  '
		<li>
			<a href="Directori.php">
			Directori INc
			</a>
		</li>';


		
		




/*///Botó del publicacions	
		echo  '
		<td bgcolor="#333333" class="ButtonMS" '.$stilo.'  height="28px" id="tdMSPublicacions" onClick="MostraPublicacions();" align="left">
			<div id="DIVTitolMSPublicacions" class="DIVMenuS">Publicacions</div>
		</td>
		<td width="2px"></td>

';
*/

/////////////////////////////////////////////////////Boton nou MS i GU



		
if ($_SESSION["Creacio"]=="1")
{
	echo 	'
		<button class="PlusButton" onclick="NovaMS();"/>';
}

if ($_SESSION["Usuarios"]=="1")
{
	echo 	'<button class="GUButton" onclick="MostraGestioGU();"/>';
}

echo '</table>
			</td>';

	
			
		echo '
		</tr>
	</table>

	
	<input type="hidden" id="CuentaMS" value="'.$cuenta.'">';
	

/////////////////////////////////////////////////////Boton nou MS i GU	



?>