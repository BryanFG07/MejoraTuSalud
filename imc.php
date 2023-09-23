<?php require("./layout/menu.php")?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);
?>
<style>
    .imc{
        background-color: #6CFF86;
        border-radius: 15px;
    }
    .contenedor_imc{
        border: solid black;
        width: 1050px;
        height: 370px;
        margin:auto;
        margin-top: 50px;
        border-radius: 18px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 20px;
    }
    .con{
        display: flex;
        position: relative;
    }
    .peso{
        left: 70px;
        top: 80px;
    }
    .altura{
        left: 58px;
        top: 80px;
    }
    #img_imc{
        width: 300px;
        height: auto;
        position: relative;
        left: 600px;
        bottom: 80px;
    }
    #calcular{
        width: 100px;
        height: 38px;
        border: solid 2px #408948;
        font-size: 20px;
        border-radius: 10px;
        text-align: center;
        align-items: center;
        position: relative;
        left: 460px;
        bottom: 60px;
    }
    #calcular:hover{
        background-color: #6CFF86;
        cursor:pointer;
    }
    #tabla_imc{
        width: 800px;
        height: auto;
        margin: auto;
        margin-top: 30px;
        position: center;
    }
</style>

<div class="contenedor_imc">
    <div class="con peso">
        <p>Peso:<p>&nbsp;&nbsp;&nbsp;
        <input type="number" id="peso_c">&nbsp;&nbsp;&nbsp;
        <p>kg<p>
    </div>
    <div class="con altura">
    <p>Altura:<p>&nbsp;&nbsp;&nbsp;
        <input type="number" id="altura">&nbsp;&nbsp;&nbsp;
        <p>cm<p>
    </div>
    <img src="./img/imc_personas.png" id="img_imc">
    <div id="calcular" onclick="prueba();">Calcular</div>
</div>
<script>
    function prueba(){
        var peso=document.getElementById("peso_c").value;
        var altura=document.getElementById("altura").value;
        altura=altura/100;
        if(peso=="" || altura=="")
        {
            Swal.fire({
            title: 'Error',
            text:'Los campos no pueden estar vacios',
            icon:"error",
            confirmButtonText:'Ok',
            background: '#CCD3D2',
            allowOutsideClick:false,
            allowEscapeKey:false,
            allowEnterKey:false,
            confirmButtonColor:'#389352',
        })
        }
        else{
            if(peso<0 || altura<0)
            {
                Swal.fire({
                title: 'Error',
                text:'Los valores no pueden ser negativos',
                icon:"error",
                confirmButtonText:'Ok',
                background: '#CCD3D2',
                allowOutsideClick:false,
                allowEscapeKey:false,
                allowEnterKey:false,
                confirmButtonColor:'#389352',
            })
            }
            else{
                let imc=peso/Math.pow(altura,2);
                imc=imc.toFixed(2);
                Swal.fire({
                title: 'Calculo de IMC',
                text:'Su IMC es '+imc,
                confirmButtonText:'Listo',
                background: '#CCD3D2',
                allowOutsideClick:false,
                allowEscapeKey:false,
                allowEnterKey:false,
                confirmButtonColor:'#389352',
                })
            }
        }
    }
</script>
<center><img id="tabla_imc" src="./img/tabla_imc.png"></center>
<?php require("./layout/footer.php")?>
