<?php
include("../rao/sas_con.php");
session_start();
 
$sel1 = $_GET["sel1"];
$sel2 = $_GET["sel2"];
$id = $_GET["id"];

if ($id != "Ocultes") $SQL = "SELECT * FROM LinMenu WHERE IdSite = ".$_SESSION["IdSite"]." AND IdCapMenu = $id AND Tipus <> 2 order by Orden";
else $SQL = "SELECT * FROM LinMenu WHERE IdSite = ".$_SESSION["IdSite"]." AND Tipus = 2 order by Orden";

$result = mysql_query($SQL,$oConn);
 
$resultado = "<option value=0>----------------------------------</option>";

while ($row = mysql_fetch_array($result)){
	
	
	if ($row["IdLinMenu"] == $sel1)
	{		
		$resultado = $resultado."<option value=".$row["IdLinMenu"]." selected >".$row["Titol"]."</option>";
	}else
	{
		$resultado = $resultado."<option value=".$row["IdLinMenu"] .">".$row["Titol"]."</option>";
	}
}


$resultado = $resultado."|<option value=0>----------------------------------</option>";

if ($id != "Ocultes")
{
	$SQL = "SELECT * FROM LinMD WHERE IdCapMenu = $id order by Orden";
	$result = mysql_query($SQL,$oConn);
	 
	
	while ($row = mysql_fetch_array($result)){
		
		
		if ($row["IdLinMD"] == $sel2)
		{		
			$resultado = $resultado."<option value=".$row["IdLinMD"]." selected >".$row["Titol"]."</option>";
		}else
		{
			$resultado = $resultado."<option value=".$row["IdLinMD"] .">".$row["Titol"]."</option>";
		}
	}
}

mysql_close($oConn);
echo $resultado;

?>
