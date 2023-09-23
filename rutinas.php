<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);


?>
<?php require("./layout/menu.php")?>
<?php require("./layout/estructura_sec.php")?>
<div class="seccion">
    <div class="img_sec num1" id="num1"onclick="location.href='rutinas_cardio.php';" style="cursor:pointer;">
        <div class="contenido">Cardio</div>
    </div>
    <div class="img_sec num2" id="num2" onclick="location.href='rutinas_fuerza.php';" style="cursor:pointer;">
     <div class="contenido">Fuerza</div></div>
</div>
<div class="seccion">
    <div class="img_sec num3" id="num3" onclick="location.href='rutinas_resistencia.php';" style="cursor:pointer;">
    <div class="contenido">Resistencia</div></div>
    <div class="img_sec num4" id="num4" onclick="location.href='rutinas_aerobicas.php';" style="cursor:pointer;">
    <div class="contenido">Aerobits</div></div>
</div>
<style>
.rutinas{
    background-color: #6CFF86;
    border-radius: 15px;
}
.num1{
    background-image: url(./img/cardio.jfif);
}
.num2{
    background-image: url(./img/fuerza.jfif);
}
.num3{
    background-image: url(./img/resistencia.jfif);
}
.num4{
    background-image: url(./img/aerobicos2.jpg);
}
</style>
<?php require("./layout/footer.php")?>
