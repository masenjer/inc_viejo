<?php	
	$oConn = mysql_connect("surya.uab.es:3306", "incUser", "r3cur5052012");
	mysql_select_db("c2063231_gestor",$oConn) OR DIE (mysql_error());
	
	mysql_query("SET NAMES utf8");
?>