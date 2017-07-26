<?php

error_reporting (5); 
include("../rao/sas_con.php"); 

ini_set('session.cache_expire',3);
ini_set("session.gc_maxlifetime",3);
session_start();

$idCap = $_GET["n"];

$SQL = "SELECT Titol FROM CapMenu WHERE IdSite =".$_SESSION["IdSite"]." AND IdCapMenu = ".$idCap;
$result = mysql_query($SQL,$oConn);
while ($row = mysql_fetch_array($result))
{
	$TitolCap = $row["Titol"];
}

$SQL = "SELECT * FROM LinMenu WHERE IdSite =".$_SESSION["IdSite"]." AND IdCapMenu = ".$idCap." AND IdLinMenuRel = 0 AND Tipus <> 2  order by orden";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%" cellspacing="0" cellpadding="0" border="0"  style="border-style:solid;border-width:1px;border-color:#dddddd">
	<tr>
		<td>
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top">
					<td id="fuenteTitolML" width="5px" class="fuenteTitolML"></td>
					<td id="fuenteTitolML" align="left" valign="middle" height="35px" class="fuenteTitolML"> '.$TitolCap.' </td>
					<td id="fuenteTitolML" width="5px" class="fuenteTitolML" ></td>
				</tr>
				
			</table>
			<table width="100%"  cellpadding="0" cellspacing="0" border="0" class="fuenteML" id="fuenteML">';

while ($row = mysql_fetch_array($result))
{
	if ($_SESSION["Creacio"]=="1")
	{
		$DobleClic = 'ondblclick="EditaTitolLPage('.$row["IdLinMenu"].')"';	
	}
	
	$resultado = $resultado . '
	<tr valign="middle">
		<td width="5px">
			<input type="hidden" id="tdMEAntic'.$row["IdLinMenu"].'" value="'.$row["Titol"].'">
			<input type="hidden" id="tdMEhrefAntic'.$row["IdLinMenu"].'" value="'.$row["Titol"].'_'.$row["IdLinMenu"].'_1">
		</td>';
		
	if ($row["Tipus"] == 1)
	{	
		$resultado = $resultado . '  
		<td id="tdME'.$row["IdLinMenu"].'" align="left"  height="25px" class="fuenteML" style="padding-top:10px;">
			<a href = "index.php#!/'.$row["Titol"].'_'.$row["IdLinMenu"].'_1" style="text-decoration:none;" class="fuenteML">
				<div id="DIVTitolLPage'.$row["IdLinMenu"].'">'.$row["Titol"].'</div>
			</a>
		</td>';
	}
	else
	{
		$resultado = $resultado . '
		<td id="tdME'.$row["IdLinMenu"].'" align="left" '.$DobleClic.'  height="35px" class="fuenteTitolML" valign="bottom">
			<div id="DIVTitolLPage'.$row["IdLinMenu"].'">'.$row["Titol"].'</div>
		</td>';
	}
	
	
	$resultado = $resultado . '
		<td width="5px"></td>';
		
	if ($_SESSION["Creacio"]=="1")
	{
		$resultado = $resultado . '<td align="right" width="42px">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td><button class="EditButton" onClick="EditaTitolLPage('.$row["IdLinMenu"].')"/></td>
					<td rowspan="2">
						<input class="OrdenML" type="text"  id="OrdenME'.$row["IdLinMenu"].'" value="'.$row["Orden"].'"  onKeyPress="submitenter(5,event,'.$row["IdLinMenu"].')"></td>						
				</tr>
				<tr>
					<td><button class="LinMenuDeleteButton" onClick="MostraEliminaTOT(1,'.$idCap.','.$row["IdLinMenu"].');"/></td>
				</tr>
			</table>
		</td>
	</tr>';
	}

}

mysql_close($oConn);


		
if ($_SESSION["Creacio"]=="1")
{
	$resultado = $resultado . 
	'	<tr>
			<td height="8px"></td>
		</tr>
		<tr valign="bottom">
			<td colspan="5" align="right">
				<img id="ImageML" src="img/TitolButton.jpg" onClick="NovaLPageTitol('.$idCap.',0);" title="Nou T&iacute;tol"><img id="ImageML" src="img/plus.jpg" onClick="NovaLPage('.$idCap.',0)" title="Nova P&agrave;gina">
			</td>
		</tr>';
		
}

$resultado = $resultado . 
		'	
		<tr>
			<td height="20px"></td>
		</tr>

	</table>
		</td>
	</tr>
</table>
';
echo $resultado;
?>

