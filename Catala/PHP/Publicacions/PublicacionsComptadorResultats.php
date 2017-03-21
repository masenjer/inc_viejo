<?php
function ComptadorResultatsPublicacions($cond, $tipus)
{
	include("../../rao/sas_con.php"); 
	
	switch ($tipus)
	{
		case "0":
		case "1":	$tipus = " AND Tipus = ".$tipus;
					break;
		
		default:	$tipus = "";
					break;						
	}	
		
	$SQL = "SELECT COUNT(*) AS Cuenta FROM Publicacions WHERE ".$cond.$tipus;	
	$result = mysql_query($SQL,$oConn);
	
	while ($row = mysql_fetch_array($result))
	{
		echo '<span class="fuenteTitolContingut">'.$row["Cuenta"].'</span><span class="fuenteContingut"> Registres relacionats amb la cerca</span>';	
	}
	
}
?>