<?php
include("../rao/sas_con.php");
include("CS.php"); 

if (CS())
{
	$id = $_GET["id"];
	$IMG = $_GET["IMG"];
	
	if ($IMG)
	{
		unlink('../ImgNot/'.$IMG);	
	}
	
	$SQL = "DELETE FROM Noticias WHERE IdNoticia =".$id;
	if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));

	
	echo $id;
}
?>