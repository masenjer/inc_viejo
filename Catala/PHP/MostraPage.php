<?php
error_reporting (5); 
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

$id = $_GET["id"]; 

switch($_GET["op"])
{
	case 1: 	$SQL = "SELECT Titol,Contingut, Tipus, IdCapMenu FROM LinMenu WHERE IdLinMenu = " . $id;
				break;
	case 2: 	$SQL = "SELECT Titol,Contingut, IdCapMenu FROM LinMD WHERE  IdLinMD = " . $id;
				break;

}

/////Primero compruebo que no se trate de un nodo padre

	$result = mysql_query($SQL,$oConn);
	
	while ($row = mysql_fetch_array($result))
	{
		$Titol = $row["Titol"];
		$Titol = Quita($Titol);
		
		$Contingut = str_replace("/NewPage","",$row["Contingut"]);
		//$Contingut = Quita($Contingut);
		$IdCap = $row["IdCapMenu"];
		$Tipus = $row["Tipus"];		
	}




$SQL = "SELECT Titol FROM CapMenu WHERE IdCapMenu = ".$IdCap;
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$TitolCap = $row["Titol"];
}


mysql_close($oConn);


if ($_GET["op"] == "1")
{
	if ($Id != '84')
	{
		$Ruta = '

		<ul class="breadcrumb"> 
			<li>
				<a href="index.php">Inici</a>
			</li> 
			<li>
				<a href="#!/MS_'.$IdCap.'">'.$TitolCap.'</a>
			</li>
			'.BuscaRuta($id).
		'</ul>';
	}
	else
	{
		$Titol = "";	
	}
}

echo $Titol ."|". $Contingut."|".$Ruta."|".$id.",".$_GET["op"]."|".$IdCap."|".$Tipus;
?>

<?php
function BuscaRuta($IdLin)
{
	include("../rao/sas_con.php");
	
	$SQL = "SELECT Titol,IdLinMenuRel, IdCapMenu FROM LinMenu WHERE IdLinMenu = ".$IdLin;
	$result = mysql_query($SQL,$oConn);

	while ($row = mysql_fetch_array($result))
	{
		if ($row["IdLinMenuRel"] == 0)
		{
			return '
				<li>
					<a href="#!/'.$row["Titol"].'_'.$IdLin.'_1">'. $row["Titol"].'</a>
				</li>';
		}
		else
		{
			return BuscaRuta($row["IdLinMenuRel"]).'
				<li>
					<a href="#!/'.$row["Titol"].'_'.$IdLin.'_1">'. $row["Titol"].'</a>
				</li>';
		}
	}
	mysql_close($oConn);
}
?>