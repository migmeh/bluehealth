<?php
include("conexion.php");
$id=$_GET["id"];
echo $id;

$sql = "UPDATE $usuarios SET eliminar='1', f_eliminar='$fecha' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("location:/admin.php");	
}
?>