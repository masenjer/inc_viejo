<?php

error_reporting(E_ALL);

$destino = "../../IMGHomeDin"; 
$nom = $_GET["nom"];

move_uploaded_file ( $_FILES [ 'NewIMGHomeName' ][ 'tmp_name' ], $destino . '/' . $nom); 

//echo $_FILES [ 'Imatge' ][ 'name' ];

echo  "Fichero subido correctamente";

echo $destino . '/' . $nom;
?> 




