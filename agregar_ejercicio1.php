<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);
foreach($conexion->query("SELECT * FROM control_calorias where id_calorias='$usuario'") as $row2);
$caloriasn = (int)$row2["calorias"];
$caloriasn=$caloriasn+50;
$quemadas=(int)$row2["quemadas"];
$quemadas=$quemadas+50;

$consult= "UPDATE control_calorias SET calorias='$caloriasn',quemadas='$quemadas' where id_calorias='$usuario'";
$resultado=mysqli_query($conexion,$consult);

header('location:agregarejercicio.php');
echo "Swal.fire(
    'Se ha agregado correctamente',
    '',
    'success',
    timer:30000
    )";
?>