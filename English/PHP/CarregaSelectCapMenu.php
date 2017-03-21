<?php
include("../rao/sas_con.php");
session_start();
 
$sel = $_GET["sel"];


$SQL = "SELECT * FROM CapMenu WHERE IdSite = ".$_SESSION["IdSite"]." order by Orden";
$result = mysql_query($SQL,$oConn);
 
$resultado = "<option value=0>----------------------------------</option>";

while ($row = mysql_fetch_array($result)){
	
	
	if ($row["IdCapMenu"] == $sel)
	{		
		$resultado = $resultado."<option value=".$row["IdCapMenu"]." selected >".$row["Titol"]."</option>";
	}else
	{
		$resultado = $resultado."<option value=".$row["IdCapMenu"] .">".$row["Titol"]."</option>";
	}
}

$resultado = $resultado.'<option value="Ocultes" style="background:#666; color: #FFF;">Ocultes</option>';


mysql_close($oConn);
echo $indice."|".$resultado;

?>
