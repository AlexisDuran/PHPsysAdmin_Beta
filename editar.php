<?php
include 'conn.php';

$id = $_POST['id'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serie=$_POST['serie'];
$cpu=$_POST['cpu'];
$ram=$_POST['ram'];
$dd=$_POST['dd'];
$tv=$_POST['tv'];

$update="UPDATE equipos SET marca = '$marca', modelo = '$modelo', serie = '$serie', cpu = '$cpu', ram = '$ram', dd = '$dd', tv = '$tv' WHERE id = $id";

if(mysqli_query($conn,$update)){
    $mensaje= "EQUIPO EDITADO CON EXITO!";
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.location = 'http://localhost/RentaPc/index4.php' ";
    echo "</script>";
}else {
    $mensaje="ERROR! CONTACTAR AL AREA DE SOPORTE";
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.location = 'http://localhost/RentaPc/editar.php' ";
    echo "</script>";
    }

?>
