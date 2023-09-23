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
    <div class="img_sec num1" id="num1" onclick="location.href='recetas_bajasencalorias.php';" style="cursor:pointer;">
        <div class="contenido">Bajas en calorias</div>
    </div>
    <div class="img_sec num2" id="num2" onclick="location.href='recetas_proteinas.php';" style="cursor:pointer;">
     <div class="contenido">Altas en proteínas</div></div>
</div>
<div class="seccion">
    <div class="img_sec num3" id="num3" onclick="location.href='recetas_fibra.php';" style="cursor:pointer;">
    <div class="contenido">Altas en fibra</div></div>
    <div class="img_sec num4" id="num4" onclick="location.href='recetas_fitness.php';" style="cursor:pointer;">
    <div class="contenido">Fitness</div></div>
</div>
<style>
.recetas{
        background-color: #6CFF86;
        border-radius: 15px;
    }
.num1{
    background-image: url(./img/bajasencalorias.jpg);
}
.num2{
    background-image: url(./img/proteinas.jpg);
}
.num3{
    background-image: url(./img/fibra.jfif);
}
.num4{
    background-image: url(./img/fitnes.jfif);
}
</style>
<?php require("./layout/footer.php")?>
