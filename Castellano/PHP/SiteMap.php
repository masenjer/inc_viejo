<?php

error_reporting (0); 
include("../rao/sas_con.php"); 

$dominio = "http://inc.uab.cat/Catala";


$resultado = '
<?xml version="1.0" encoding="UTF-8"?>

  <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  	<url>
        <loc>'.$dominio.'/</loc>
	   		<changefreq>weekly</changefreq>
			<priority>1</priority>
	</url>
  	<url>
        <loc>'.$dominio.'/#home</loc>
	   		<changefreq>weekly</changefreq>
			<priority>1</priority>
	</url>
';

$SQL = "SELECT L.* FROM LinMenu L, CapMenu C WHERE C.IdCapMenu = L.IdCapMenu AND C.IdSite = 0";
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$titol = str_replace(" ","-",$row["Titol"]);

	$resultado .= '
  	<url>
        <loc>'.$dominio.'/#!/'.$titol.'_'.$row["IdLinMenu"].'_1</loc>
	   		<changefreq>monthly</changefreq>
			<priority>0.8</priority>
	</url>
	';
}

$SQL = "SELECT * FROM LinMD";
$result = mysql_query($SQL,$oConn);

while ($row = mysql_fetch_array($result))
{
	$titol = str_replace(" ","-",$row["Titol"]);
	
	$resultado .= '
  	<url>
        <loc>'.$dominio.'/#!/'.$titol.'_'.$row["IdLinMD"].'_2</loc>
	   		<changefreq>monthly</changefreq>
			<priority>0.8</priority>
	</url>
	';
}

mysql_close($oConn);


$resultado.="  </urlset>";

echo $resultado;
		

?>

 