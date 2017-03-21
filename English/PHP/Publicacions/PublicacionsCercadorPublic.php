<?php

function MostraPublicacionsPublic($txt,$tipus)
{
	include("../../rao/sas_con.php"); 
	
	foreach ($txt as $v)
	{
		if ($cond) $cond.=" AND ";
		
		$cond .= "(Autor LIKE '%".$v."%' OR Titol LIKE '%".$v."%' OR Any LIKE '%".$v."%' OR Linies LIKE '%".$v."%' OR Revista LIKE '%".$v."%')";
	}
	
	switch ($tipus)
	{
		case "0":
		case "1":	$ArrayTipus = array($tipus);
					break;
		
		default:	$ArrayTipus = array(0,1);
					break;						
	}	
			
	foreach ($ArrayTipus as $t)
	{	
		
		$SQL = "SELECT COUNT(*) AS CuentaRows FROM Publicacions WHERE ".$cond." AND Tipus =".$t;
		$result = mysql_query($SQL,$oConn);
		
		while ($row = mysql_fetch_array($result))
		{
			$CuentaRows = $row["CuentaRows"];
		}

		if ($t == "0") 	$TitolCapca = "Articles related to your search";
		else			$TitolCapca = "Books related to your search";				
				
		echo '
			<table class="fuenteContingut" width="80%">	
				<tr>
					<td colspan="2" style="padding-bottom:30px;padding-top:20px;" align="left" class="fuenteTitolContingut">'.$TitolCapca.' ('.$CuentaRows.')</td>
				</tr>
			';
		
		//echo $SQL;
		$SQL = "SELECT * FROM Publicacions WHERE ".$cond." AND Tipus =".$t." ORDER BY Titol";
		$result = mysql_query($SQL,$oConn);
		
		while ($row = mysql_fetch_array($result))
		{
			echo'
			<tr>
				<td width="120px"  style="padding-left:15px;">Title:</td>
				<td>'.$row["Titol"].'</td>
			</tr>
			<tr>
				<td style="padding-left:15px;">Author:</td>
				<td>'.$row["Autor"].'</td>
			</tr>
			<tr>
				<td style="padding-left:15px; padding-right:5px;">Research program:</td>
				<td>'.$row["Linies"].'</td>
			</tr>
			<tr>
				<td style="padding-left:15px;">Year:</td>
				<td>'.$row["Any"].'</td>
			</tr>
			<tr>
				<td style="padding-left:15px; padding-bottom:10px;">Articles/books:</td>
				<td style="padding-bottom:10px;">'.$row["Revista"].'</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-bottom:20px; border-top:1px solid #ddd;">
			<tr>			
			';
		}
		
	echo'
		</table>';
	}
	echo '|';
	
	ComptadorResultatsPublicacions($cond,$tipus);
}
?>