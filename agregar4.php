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
$caloriasn=$caloriasn-40;
$grasas = (int)$row2["grasas"];
$grasas=$grasas+1;
$carbohidratos = (int)$row2["carbohidratos"];
$carbohidratos=$carbohidratos+80;
$proteinas = (int)$row2["proteinas"];
$proteinas=$proteinas+2;
$consumidas = (int)$row2["consumidas"];
$consumidas=$consumidas+40;

$consult= "UPDATE control_calorias SET calorias='$caloriasn', grasas='$grasas', carbohidratos='$carbohidratos',proteinas='$proteinas',consumidas='$consumidas' where id_calorias='$usuario'";
$resultado=mysqli_query($conexion,$consult);

header('location:agregaralimentos.php');
echo "Swal.fire(
    'Se ha agregado correctamente',
    '',
    'success',
    timer:30000
    )";
?>