<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 
session_start();

$SQL = "SELECT IdNoticia, Titol, Rang FROM Noticias WHERE IdSite =".$_SESSION["IdSite"]." AND Rang is not NULL order by Rang ASC";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="100%"  cellpadding="10" cellspacing="0" border="0" class="fuenteLinNoticia">';

while ($row = mysql_fetch_array($result))
{
	$resultado = $resultado . '
	<tr valign="middle">
		<td style="border-bottom:1px solid #aaa;">
			<input type="text" id="RangNoticia'.$row["IdNoticia"].'" value = "'.$row["Rang"].'" onKeyPress="submitenter(11,event,'.$row["IdNoticia"].')" style="width:15px;">
		</td>
		<td height="40px" id="MenuNoticias'.$row["IdNoticia"].'" onClick="CargaNoticias('.$row["IdNoticia"].')" align="left" style="border-bottom:1px solid #aaa;">						
			'.$row["Titol"].'
		</td>		
	</tr>';
}

mysql_close($oConn);

$resultado = $resultado . '	
</table>';

echo $resultado;
?>
