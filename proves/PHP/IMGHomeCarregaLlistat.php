<?php
include("../rao/sas_con.php");


$SQL = "Select * FROM IMGHome ORDER BY Orden ASC ";
$result = mysql_query($SQL,$oConn);

$mida = 0;

while ($row = mysql_fetch_array($result))
{
	$mida ++;
	
	$fila=getimagesize("../../IMGHomeDin/".$row["IdIMGHome"].$row["Ruta"]); 

	$anchura=$fila[0]; 
	$altura=$fila[1]; 

	if ($anchura<$altura) 
	{ 
		$AoA= 'height';
	} 
	else 
	{ 
		$AoA= 'width';
	} 
	
	echo $row["IdIMGHome"].$row["Ruta"]."?#?".$AoA."*#*";	 
}

echo '|'.$mida; 
?>