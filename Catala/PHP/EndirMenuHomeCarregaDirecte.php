<?php

include("rao/sas_con.php");
//include("rao/PonQuita.php"); 



ini_set("session.gc_maxlifetime",3);
ini_set('session.cache_expire',3);
session_start();

$permiso="";
$colsp = 5;

if ($_SESSION["Noticias"]=="1")
{	
	$permiso = '<button class="EditButton" onClick="AbreGestorEnDir();"/>';
	$colsp = 3;
}

$SQL = "SELECT * FROM EnDirHome WHERE  IdSite =".$_SESSION["IdSite"]."  order by Orden ASC";
$result = mysql_query($SQL,$oConn);

echo '<ul class="fitxa-llistat">';

while ($row = mysql_fetch_array($result))
{
	$target = "";
	
	if ($row["TipusEnllac"] == 1)
	{
		$accion = ' href="javascript:void(0);"  onClick=" CarregaEnllacIntern(\''.$row["URL"].'\');"';  
	}else
	{
		if ($row["TipusEnllac"] == 2) 
		{
			$accion = ' href = "'.$row["URL"].'" '; 			
		}
		else {
			$accion = ' href = "Documents/'.$row["URL"].'" ';
			$target = "_blank";
		}
	}
	
	echo '
	<li>
		<a '.$accion.' target="'.$target.'">'.$row["Titol"].'<span class="ico more" aria-hidden="true"></span></a>
	</li>';
}

mysql_close($oConn);

echo '
	
</ul>';


?>
