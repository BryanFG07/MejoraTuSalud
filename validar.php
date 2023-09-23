<?php
include('bd.php');
session_start();
$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];

$q="SELECT COUNT(*) as contar from usuario where usuario='$USUARIO' and password='$PASSWORD'";
$consulta =mysqli_query($conexion,$q);
$array =mysqli_fetch_array($consulta);
if($array['contar']>0){
    foreach($conexion->query("SELECT * FROM usuario where usuario='$USUARIO'") as $row);
    $_SESSION['username']=$row['id'];
    header("location:index.php");
}
else{
    header("location:login2.php");
}








