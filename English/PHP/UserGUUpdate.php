<?php
include("../rao/sas_con.php");
include("../rao/PonQuita.php"); 

////id:id,N:N,A:A,E:E,U:U,P:P,R1:R1,R2:R2,R3:R3,R4:R4

$N = $_POST["N"];
$N = Pon($N);
$A = $_POST["A"];
$A = Pon($A);
$E = $_POST["E"];
$U = $_POST["U"];
$P = sha1(sha1($_POST["P"]));
$R1 = $_POST["R1"];
$R2 = $_POST["R2"];
$R3 = $_POST["R3"];
$R4 = $_POST["R4"];

$id = $_POST["id"];

if ($id == "")
{	
	$SQL = "INSERT INTO Users(Nom, Cognoms, Email, User, Password, Usuarios, Creacio, Edicio, Noticias) VALUES ('$N','$A','$E','$U','$P',$R1,$R2,$R3,$R4)";
	$result = mysql_query($SQL,$oConn);
	
	$SQL2 = "SELECT IdUser FROM Users ORDER BY IdUser DESC LIMIT 1";
	$result2 = mysql_query($SQL2,$oConn);
	
	while($row = mysql_fetch_array($result2))
	{
		$id = $row["IdUser"]; 	
	}

}
else
{
	$SQL = "UPDATE Users SET 
				Nom = '$N',
				Cognoms = '$A', 
				Email = '$E', 
				User = '$U', 
				Password = '$P',
				Usuarios = $R1,
				Creacio = $R2,
				Edicio = $R3,
				Noticias = $R4
				WHERE IdUser = $id";
	$result = mysql_query($SQL,$oConn);
}

echo $SQL;
?>