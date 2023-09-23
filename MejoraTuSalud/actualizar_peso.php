<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);
foreach($conexion->query("SELECT * FROM peso where id_peso='$usuario'") as $row2);
$peso_a=$_POST['actualizar_peso_g'];

$consult= "UPDATE peso SET peso_actual='$peso_a' where id_peso='$usuario'";
$resultado=mysqli_query($conexion,$consult);
header('location:progreso.php');
echo "Swal.fire(
    'Se ha actualizado el peso',
    '',
    'success',
    timer:30000
    )";
?>