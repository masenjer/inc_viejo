<?php
include("rao/sas_con.php"); 

session_start();

$SQL = "SELECT IdCapMenu, Titol FROM CapMenu WHERE IdSite = ".$_SESSION["IdSite"];
$result = mysql_query($SQL,$oConn);

$primer = true;
$border_left = "";

$numRows = mysql_num_rows($result);

$num_cols = 12/$numRows;

echo '
	<ul>';

while ($row = mysql_fetch_array($result))
{

	$direccion = "";

	$SQL2 = "SELECT * FROM LinMenu WHERE IdCapMenu = ".$row["IdCapMenu"]." and tipus = 1 order by Orden ASC LIMIT 1";
	$result2 = mysql_query($SQL2,$oConn);

	while ($row2 = mysql_fetch_array($result2))
	{
		$direccion = 'index.php#!/'.$row2["Titol"].'_'.$row2["IdLinMenu"].'_1';
	}

	if (!$direccion) $direccion = 'index.php#!/MS_'.$row["IdCapMenu"];

	

	if(!$primer) $border_left = 'border-left'; 

	echo '
		<li class="col-md-15 '.$border_left.'">
			<a class="negreta" href="'.$direccion.'">'.$row["Titol"].'</a>

			<ul>';
				
				

	$SQL2 = "SELECT * FROM LinMenu WHERE IdCapMenu = ".$row["IdCapMenu"]." AND LinMenu.Tipus <>2 order by orden";
	$result2 = mysql_query($SQL2,$oConn);
	
	while ($row2 = mysql_fetch_array($result2))
	{
		echo '
				<li>
					<a href="index.php#!/'.$row2["Titol"].'_'.$row2["IdLinMenu"].'_1">'.$row2["Titol"].'</a>
					
				</li>
		';
	}


	echo '
			</ul>
		</li>
	';		
				
	$primer = false;
}

echo '</ul>';

mysql_close($oConn);

?>
