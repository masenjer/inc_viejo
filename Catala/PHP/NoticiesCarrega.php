<?php
include("../rao/sas_con.php");
include("Fechas.php");
session_start();

$id = $_GET["Id"];
if ($id != "")
{
	$SQL = "SELECT * FROM Noticias WHERE IDSite = ".$_SESSION["IdSite"]." AND IdNoticia = ".$id;
	$result = mysql_query($SQL,$oConn);
	
	while ($row = mysql_fetch_array($result))
	{
		$T = $row["Titol"];
		$C = $row["Cos"];
		$F = SelectFecha($row["FechaNot"]);
		$FP = SelectFecha($row["FechaPub"]);
		$FD = SelectFecha($row["FechaDesPub"]);
		$IMG = $row["Image"];
		$NOU = $row["NOU"];
	}
}

mysql_close($oConn);

echo $T."|".$C."|".$F."|".$FP."|".$FD."|".$id."|".$IMG."|".$NOU;

?>