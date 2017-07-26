<?php	

$mysqli = new mysqli("localhost", "inc", "secreto", "inc_gestor");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->query("SET NAMES 'utf8'");

?>