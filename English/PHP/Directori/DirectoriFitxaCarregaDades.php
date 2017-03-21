<?php
	function CarregaDadesProfile_JSON($id,$Conn){
		include ($Conn);
		
		$retorno = array();
		$datos = array("Nom","Cognoms","Despatx","Ubicacio","Telefon","Email","Imatge","IdDirectoriCategoria1","IdDirectoriCategoria2","IdDirectori", "Carrec", "Adreca", "Xarxes");
		
		$SQL = "SELECT * FROM Directori WHERE IdDirectori = ".$id;
		$result = mysql_query($SQL,$oConn);
		
		while ($row = mysql_fetch_array($result)){ 
			foreach ($datos as $v){
				$retorno[$v] =$row[$v];	
			}
		}
		
		return json_encode($retorno);
		
	}
?>