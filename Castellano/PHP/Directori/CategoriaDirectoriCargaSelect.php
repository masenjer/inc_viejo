<?php
function CategoriaDirectoriCargaSelect($idCat, $Conn){
	session_start();
	include($Conn); 
	
	$resultado = array();
	
	switch ($_SESSION["IdSite"]){
		case 0: $idioma = "_ca";
				break;
		case 1: $idioma = "_es";
				break;
		case 2: $idioma = "_en";
				break;					
	}
	
	$SQL = "SELECT * FROM DirectoriCategoria ORDER BY Orden ";	
	$result = mysql_query($SQL,$oConn);

	$resultado[1] = '<option value=0"">----------------------------------</option>';
	
	while ($row = mysql_fetch_array($result))
	{
		if ($row["IdDirectoriCategoria"] == $idCat){
			$resultado[0] = $row["Titol".$idioma];
			$selected = " selected";
		} 
		else $selected = "";
		
		$resultado[1].='<option value="'.$row["IdDirectoriCategoria"] .'" '.$selected.'>'.$row["Titol".$idioma].'</option>';
	}
	
	return $resultado;
}
?>