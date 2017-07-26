<?php
include("../rao/sas_con.php");

$id = $_GET["id"];
$op = $_GET["op"];
$orden = $_GET["orden"];

if ($op == 0)
{
	$SQL = "SELECT IdIMGHome FROM IMGHome WHERE Orden < ".$orden." ORDER BY Orden DESC LIMIT 1 ";
	$nOrden = $orden - 1;
}else 
{
	$SQL = "SELECT IdIMGHome FROM IMGHome WHERE Orden > ".$orden." ORDER BY Orden ASC LIMIT 1 ";
	$nOrden = $orden + 1;
}

$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$SQL2 = "UPDATE IMGHome SET Orden = ".$orden." WHERE IdIMGHome = ".$row["IdIMGHome"];
	$result2 = mysql_query($SQL2,$oConn);

}
	
$SQL = "UPDATE IMGHome SET Orden = ".$nOrden." WHERE IdIMGHome = ".$id;
$result = mysql_query($SQL,$oConn);


?>