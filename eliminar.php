<?php
include 'conn.php';

$id = $_POST['id'];
$eliminar="DELETE FROM equipos WHERE id = $id ";
if($conn -> query($eliminar) === TRUE){
    $mensaje = "REGISTRO ELIMINADO CON EXITO";
    echo "<script>";
    echo " alert('$mensaje'); ";
    echo "window.location='http://localhost/RentaPc/index4.php' ";
    echo "</script>";
}else{
    $mensaje = "ERROR!!";
    echo "<script>";
    echo " alert('$mensaje'); ";
    echo "window.location='http://localhost/RentaPc/eliminar.php' ";
    echo "</script>";
}
?>