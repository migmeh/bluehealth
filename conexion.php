<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$database="bluehealth";
$usuarios="usuarios";

$fecha = date("Y-"."m"."-d". " g:i:s");
// connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Checamos la conección
if (!$conn) {
    die("malo u_u: " . mysqli_connect_error());
}
?>