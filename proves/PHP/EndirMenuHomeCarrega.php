<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

ini_set("session.gc_maxlifetime",3);
ini_set('session.cache_expire',3);
session_start();

$permiso="";
$colsp = 5;

if ($_SESSION["Noticias"]=="1")
{	
	$permiso = '<tr><td colspan="5" align="right"><img src="img/ButtonEditContingut.png" style="cursor:pointer; height:32px" onClick="AbreGestorEnDir();"></td></tr>';
	$colsp = 3;
}

$SQL = "SELECT * FROM EnDirHome WHERE  IdSite =".$_SESSION["IdSite"]."  order by Orden ASC";
$result = mysql_query($SQL,$oConn);

$resultado = '
<table width="188px"  cellpadding="0" cellspacing="0" border="0" class="fuenteEnDirHome">
	'. $permiso.'
	<tr>
		<td height="1px" colspan="5" bgcolor="#dbdbdb"></td>
	</tr>';

while ($row = mysql_fetch_array($result))
{
	$a = "";
	
	if ($row["TipusEnllac"] == 1)
	{
		$accion = ' onClick="CarregaEnllacIntern(\''.$row["URL"].'\');"'.'>'; 
	}else
	{
		if ($row["TipusEnllac"] == 2) 
		{
			$accion = '><a href="'.$row["URL"].'" class="fuenteEnDirHome">'; 
			$a = "</a>";
		}
		else $accion = ' onClick="window.open(\'Documents/'.$row["URL"].'\');">'; 
	}
	
	$resultado = $resultado . '
	<tr valign="middle">
		<td width="1px" bgcolor="#dbdbdb"></td>
		<td width="10px"></td>
		<td height="20px" id="MenuEnDir'.$row["IdEnDirHome"].'" align="left" '.$accion.$row["Titol"].$a.'
		</td>
		<td width="20px" valign="middle" align="center"> <img src="img/FlechaEnDir.png"> </td>
		<td width="1px" bgcolor="#dbdbdb"></td>		
	</tr>
	<tr>
		<td height="1px" colspan="5" bgcolor="#dbdbdb"></td>
	</tr>';
}

mysql_close($oConn);

$resultado = $resultado . '
	
</table>';

echo $resultado;
?>
