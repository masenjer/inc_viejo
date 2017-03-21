<?php
function CS()
{
	include ("../rao/sas_con.php");	
	session_start();
	
	$c = explode("|",$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"]);
	
	$SQL = "SELECT * FROM Users where IdUser = ".$c[0]. " AND P = '". $c[1]."'" ;
	//echo $SQL;
	$result = mysql_query($SQL,$oConn);
	//echo $SQL;
	while ($row = mysql_fetch_array($result))
	{
		return true;	
	}
	
	$_SESSION["Creacio"] = "";
	$_SESSION["Edicio"] = "";
	$_SESSION["Noticias"] = "";
	$_SESSION["Usuarios"] = "";
	
	$_SESSION["dsalkdjfkaldjfkldasjfkadjfkjdasf"] = "";
	
	session_destroy();
	
	return false;
	
}
?>