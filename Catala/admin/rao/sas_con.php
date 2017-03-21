<?php	
	$oConn = mysql_connect("agullat.uab.es:3306", "medtrop", "crfm4055");
	mysql_select_db("c1110459_medtrop",$oConn) OR DIE (mysql_error());
	
	mysql_query("SET NAMES utf8");
?>