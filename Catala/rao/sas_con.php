<?php	
	$oConn = mysql_connect("127.0.0.1", "pruebas", "crfm4055");
	
	mysql_select_db("inc_gestor",$oConn) OR DIE (mysql_error());

	mysql_query("SET NAMES utf8");
?>