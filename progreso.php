<?php require("./layout/menu.php")?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);
foreach($conexion->query("SELECT * FROM peso where id_peso='$usuario'") as $row2);
$peso=$row2['peso_actual'];
?>
<style>
    .progreso{
        background-color: #6CFF86;
        border-radius: 15px;
    }
    .header_progreso{
        height: 250px;
        width: 1070px;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 0;
        background-image: url(./img/fondo_azul.jfif);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        text-align: center;
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    #cerebro{
        width: 80px;
        height: auto;
        position: relative;
        left: 110px;
        bottom: 150px;
    }
    .contenido_progreso{
        width: 1070px;
        height: auto;
        min-height: 400px;
        border: solid #43424A;
        margin: auto;
        border-radius: 15px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
    }
    .actualizar_datos{
        width: 880px;
        min-height: 200px;
        margin: auto;
        margin-top: 30px;
        margin-bottom: 10px;
        border-radius: 15px;
        border: 2px;
        background:#3B6FBA;
        color: white;
    }
    .btn_actualizar{
        border: solid 2px #6CFF86;
        width: 80px;
        height: 28px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
        justify-content: center;
        margin:auto;
        border-radius: 10px;
        
    }
    .btn_actualizar:hover{
        background-color: #6CFF86;
        color: black;
        cursor: pointer;
    }
    .actualizar{
        display: flex;
        width: 600px;
        height: auto;
        margin: auto;
        align-items: center;
    }
    #lista{
        margin-left: 50px;
    }

</style>
<div class="header_progreso">
    <br>
    <h1>Progreso</h1>
    <div id="current_date"></p>
    <script>
    date = new Date();
    year = date.getFullYear();
    month = date.getMonth() + 1;
    day = date.getDate();
    document.getElementById("current_date").innerHTML = month + "/" + day + "/" + year;
    </script>
    <br>
    <h2>Objetivo de peso: 60 kg</h2>
    <img id="cerebro" src="./img/cerebro_progreso.png">
    </div>
</div>
<div class="contenido_progreso">
    <h2>Peso Actual: <?php echo "<h2>$peso</h2>"?></h2>
    <img src="./img/progreso_grafica.png" width="600px" height="auto">
    
    <div class="actualizar_datos">
        <br>    
        <h2>Actualizar datos</h2>
        <div class="actualizar">
            <h3 id="text">Actualizar peso</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" id="contenedor_peso" name="actualizar_peso_g">
            <h3>&nbsp;&nbsp;&nbsp;kg</h3>
            <div class="btn_actualizar" id="btn_actualizar" onclick="Mensaje();" method="post">Hecho</div><br>
        </div>
        <div class="actualizar">
        <h3 id="text">Actualizar objetivo de peso</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" id="contenedor_peso" name="actualizar_objetivo_peso">
            <h3>&nbsp;&nbsp;&nbsp;kg</h3>
            <div class="btn_actualizar" id="btn_actualizar" onclick="Mensaje2();" method="post">Hecho</div><br>
        </div>
    </div>
</div>
<script src="./js/funcion.js"></script>
<script>
    function Mensaje(){
    var validacion=document.getElementById('contenedor_peso').value;
    if(validacion=='')
    {
        Swal.fire(
        'No se ha ingresado ningun dato',
        '',
        )
    }
    else{
        Swal.fire(
        'El peso se ha actualizado',
        '',
        'success'
        );
        window.location.replace("actualizar_peso.php");
    }
    }
</script>

<?php require("./layout/footer.php")?>
