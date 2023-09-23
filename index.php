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
<script src="js/funcion.js"></script>
<style>
    .inicio{
        background-color: #6CFF86;
        border-radius: 15px;
    }
    .recomendaciones{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .btn_hecho{
        border: solid 2px #6CFF86;
        width: 80px;
        height: 28px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        justify-content: center;
        margin:auto;
        border-radius: 10px;
        color: white;
        position: relative;
    }
    .re1{
        left: 110px;
    }
    .re2{
        left: 14px;
    }
    .re3{
        left: 78px;
    }
    .btn_hecho:hover{
        background-color: #6CFF86;
        color: black;
        cursor: pointer;
    }
    .cerrar{
        opacity: 0.5;
    }
    .cerrar:hover{
        opacity: 0.9;
    }
    .no_hecho{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .hecho{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    #usuario{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: right;
        margin-right: 30px;
        font-size: 20px;
    }
    #cerrar_sesion{
        opacity: 0.6;
    }
    #cerrar_sesion:hover{
        opacity: 1;
        cursor: pointer;
        height: 85px;
        width: auto;
    }

</style>
<div id="usuario"><?php echo $row['nombre'];?>&nbsp;<?php echo $row['apellido'];?><br>
<img src="./img/cerrar_sesion2.png" width="70px", height="auto" id="cerrar_sesion" onclick="cerrarsesion();">
</div>
<div class="contenido">
    <ul class="slider">
        <li><input type="radio" id="sbutton1" name="slradio" checked>
            <label for="sbutton1"></label>
            <img src="./img/dato1.jpg" alt=""></li>
        <li><input type="radio" id="sbutton2" name="slradio">
            <label for="sbutton2"></label>
            <img src="./img/dato2.jpg" alt=""></li>
        <li><input type="radio" id="sbutton3" name="slradio">
            <label for="sbutton3"></label>
            <img src="./img/dato3.jpg" alt=""></li>
    </ul>
</div>
<div class="recomedaciones">
    <div class="recomendacion">
        <div class="no_hecho" id="n_h1">
            <img src="./img/gota.png" class="recomendacion_imagen">
            <p>Bebe agua el dia de hoy</p>
            <div class="btn_hecho re1" id="btn_hechoc" onclick="RecomendacionHecha();">Hecho</div>
            <img src="./img/palomita.png" class="palomita" id="palomita_c">
            <img src="./img/cerrar.png" class="cerrar" id="cerrar_r" onclick="CerrarRecomendacion();">
        </div>
        <div class="hecho" id="h1">
            <p>La recomendación ha sido borrada</p>
            <img src="./img/deshacer.png" class="rehacer" onclick="RehacerRecomendacion();">
        </div>
    </div>
    <div class="recomendacion">
        <div class="no_hecho r2" id="n_h2">
            <img src="./img/pera.png" class="recomendacion_imagen pera">
            <p>Come verduras y frutas en dia de hoy</p>
            <div class="btn_hecho re2" id="btn_hechoc2" onclick="RecomendacionHecha2();">Hecho</div>
            <img src="./img/palomita.png" class="palomita rep2" id="palomita_c2">
            <img src="./img/cerrar.png" class="cerrar" id="cerrar_r2" onclick="CerrarRecomendacion2();">
        </div>
        <div class="hecho" id="h2">
            <p>La recomendación ha sido borrada</p>
            <img src="./img/deshacer.png" class="rehacer" onclick="RehacerRecomendacion2();">
        </div>
    </div>
    <div class="recomendacion">
        <div class="no_hecho r3" id="n_h3">
            <img src="./img/yoga.png" class="recomendacion_imagen yoga">
            <p>Realiza 15 minutos de yoga</p>
            <div class="btn_hecho re3" id="btn_hechoc3" onclick="RecomendacionHecha3();">Hecho</div>
            <img src="./img/palomita.png" class="palomita rep3" id="palomita_c3">
            <img src="./img/cerrar.png" class="cerrar" id="cerrar_r3" onclick="CerrarRecomendacion3();">
        </div>
        <div class="hecho" id="h3">
            <p>La recomendación ha sido borrada</p>
            <img src="./img/deshacer.png" class="rehacer" onclick="RehacerRecomendacion3();">
        </div>
    </div>
</div>
<br><br>

<script>
    function cerrarsesion(){
        Swal.fire({
        title: '¿Estás seguro de cerrar sesión?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, estoy seguro'
        }).then((result) => {
        if (result.isConfirmed) {
        Swal.fire(
            window.location.replace("cerrarsesion.php") 
    )
  }
})
    }
</script>
<?php require("./layout/footer.php")?>

