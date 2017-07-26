<?php
include("../rao/sas_con.php");


$SQL = "SELECT Orden from IMGHome ORDER By Orden Desc LIMIT 1" ;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$MAXOrden = $row["Orden"];
}

$primer = false;

$SQL = "Select * FROM IMGHome ORDER BY Orden ASC ";
$result = mysql_query($SQL,$oConn);

echo '
<table cellspacing="5" cellpadding="0" border="0">
	<tr>'; 
 
while ($row = mysql_fetch_array($result))
{
	if ($primer) $left='<input type="button" class="ButtonLEFT32" onclick="MoveIMGHome('.$row["IdIMGHome"].','.$row["Orden"].',0);">';
	else $primer = true;
	
	
	if ($row["Orden"]!=$MAXOrden) $right='<input type="button" class="ButtonRIGHT32" onclick="MoveIMGHome('.$row["IdIMGHome"].','.$row["Orden"].',1);">';
	else $right = "";
	
	echo '
		<td width="150px" height="150px" valign="top">
			<img src="../IMGHomeDin/'.$row["IdIMGHome"].$row["Ruta"].'" style="width:150px;height:150px;">
			<table width="150px" height="150px" cellpadding="0" cellspacing="0" border="0" style="position:relative; top:-150px;left:0;">
				<tr>
					<td colspan="2" align="right" height="32px"><input type="button" class="ButtonDelete" onclick="DeleteIMGHome('.$row["IdIMGHome"].',\''.$row["Ruta"].'\','.$row["Orden"].');"></td>
				</tr>
				<tr valign="bottom">
					<td align="left">'.$left.'</td>
					<td align="right">'.$right.'</td>
				</tr>
			</table>
			<div style="width:150px; height:150px;"></div>
		</td>
		<td width="10px"></td>';	
}

echo '	
	<tr>
</table>'; 

//echo $id."|".$name;
?>