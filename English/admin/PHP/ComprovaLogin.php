<?php
session_start();
include("h.php");
include("../../rao/sas_con.php"); 

//echo "p:".$_POST["data"];
$c = explode("|",$_POST["data"]);

$u = $c[0];
$DH = DH($c[1]);

//echo "DH:".$DH."<br>";

$a = explode("|",$DH);

//echo "p1:".$a[0].'<br>';
//echo "p2:".sha1($a[0]).'<br>';
//echo "p3:".sha1(sha1($a[0]));

if (verifyTimedHash($a[1],$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"],$a[0],5))
{
	$p = sha1($a[0]); 
	
	//echo $p;
	$aux = 0;
	
	$SQL = "SELECT * FROM Users where User = '".$u. "' AND Password = '". $p."'"; 
	$result = mysql_query($SQL,$oConn);
	echo $SQL;
	session_set_cookie_params(0, "/", $_SERVER["HTTP_HOST"], 0); 
	
	while ($row = mysql_fetch_array($result))
	{
		$aux = 1;
		
		$_SESSION["Creacio"] = $row["Creacio"];
		$_SESSION["Edicio"] = $row["Edicio"];
		$_SESSION["Noticias"] = $row["Noticias"];
		$_SESSION["Usuarios"] = $row["Usuarios"];
		
		$SQL2 = "UPDATE Users SET P='".$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"]."' WHERE IdUser = ".$row["IdUser"];
		$result2 = mysql_query($SQL2,$oConn);
		
		echo $SQL2;
		
		$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"] = $row["IdUser"]."|".$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"];
	}
	
	mysql_close($oConn);
	
}

//	$_SESSION["Creacio"] = 1;
//	$_SESSION["Edicio"] = 1;
//	$_SESSION["Noticias"] = 1;
//	$_SESSION["Usuarios"] = 1;

echo $aux;

?>