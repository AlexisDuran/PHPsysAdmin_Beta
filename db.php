<?php
include 'conn.php';

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$serie=$_POST['serie'];
$cpu=$_POST['cpu'];
$ram=$_POST['ram'];
$dd=$_POST['dd'];
$tv=$_POST['tv'];

$agregar="INSERT INTO equipos (marca,modelo,serie,cpu,ram,dd,tv) VALUES ('$marca','$modelo','$serie','$cpu','$ram','$dd','$tv')";

if(mysqli_query($conn,$agregar)){
    $mensaje= "EQUIPO AGREGADO CON EXITO!";
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.location = 'http://localhost/RentaPc/index4.php' ";
    echo "</script>";
}else {
    $mensaje="ERROR! CONTACTAR AL AREA DE SOPORTE";
    echo "<script>";
    echo "alert('$mensaje');";
    echo "window.location = 'http://localhost/RentaPc/db.php' ";
    echo "</script>";
    }

?>
