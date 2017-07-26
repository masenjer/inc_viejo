<?php
include("../rao/sas_con.php"); 

session_start();

$SQL = "SELECT IdCapMenu, Titol FROM CapMenu WHERE IdSite = ".$_SESSION["IdSite"];
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%" height="100%" cellpadding="5">
<tr>
	<td colspan="3" height="20px"> </td>
</tr>
';

$auxTRCap = 0;

while ($row = mysql_fetch_array($result))
{
	if ($auxTRCap == 0) $resultado = $resultado . '
	<tr>';

	$resultado = $resultado . '
		<td align="center" valign="top">
			<table width="200px" cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td style="background-image:URL(img/CapcaRelleu2.png);" class="TitolMapaWeb" height="15px" onclick="CarregaPaginaiMenus('.$row["IdCapMenu"].',\'\',\'\')">'.$row["Titol"].'</td>
				</tr>
				<tr>
					<td style="border: solid 1px #d7d8da; padding:5px;">
						<table>';
				
				

			$SQL2 = "SELECT * FROM LinMenu WHERE IdCapMenu = ".$row["IdCapMenu"]." AND LinMenu.Tipus <>2 order by orden";
			$result2 = mysql_query($SQL2,$oConn);
			
			while ($row2 = mysql_fetch_array($result2))
			{
				$resultado = $resultado . '
				<tr>
					<td onclick="CarregaPaginaiMenus('.$row["IdCapMenu"].','.$row2["IdLinMenu"].',1)" class="fuenteMapaWeb" >'.$row2["Titol"].'</td>
				</tr>
				';
			}


	$resultado = $resultado.	'
						</table>
					</td>
				</tr>			
				<tr>
					<td bgcolor="#FFFFFF" id="OmbraInferiorMenus" class="OmbraInferiorMenus">
				</tr>
			</table>
		</td>';
	
	if ($auxTRCap == 3)
	{ 
		$resultado = $resultado . '</tr>';
		$auxTRCap = 0;
	}
	else $auxTRCap ++;

}

$resultado = $resultado.
	'</tr>
</table>';
mysql_close($oConn);
echo $resultado;
?>

