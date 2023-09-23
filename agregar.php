<?php require("./layout/menu.php")?>
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
include("bd.php");
$usuario=$_SESSION['username'];
foreach($conexion->query("SELECT * FROM usuario where id='$usuario'") as $row);
foreach($conexion->query("SELECT * FROM control_calorias where id_calorias='$usuario'") as $row2);

$calorias=$row2['calorias'];
$consumidas=$row2['consumidas'];
$quemadas=$row2['quemadas'];
$grasas=$row2['grasas'];
$proteinas=$row2['proteinas'];
$carbohidratos=$row2['carbohidratos'];
/*$numb = (int)$row["id"];
echo $numb;*/
?>
<style>
    .agregar{
        background-color: #6CFF86;
        border-radius: 15px;
    }
    .contenedor_agregar{
        width: 1100px;
        height: auto;
        margin: auto;
        margin-top: 30px;
        color: white;
    }
    #calorias{
        width: 100%;
        height: 200px;
        background-image: url(./img/verde.jfif);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 15px;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    #consumidas{
        margin-right: 260px;
    }
    #quemadas{
        margin-left: 260px;
    }
    #restantes{
        width: 180px;
        height: 93px;
        border:dashed #6CFF86;
        border-radius: 100%;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-bottom: 50px;
    }
    #con_agregar{
        width: 100%;
        height: auto;
        min-height: 400px;
        border: 3px solid #43424A;
        position: relative;
        border-radius: 15px;
        bottom: 130px;
        border-top: none;
    }
    #estadistica{
        position: relative;
        color: black;
        text-align: center;
        border: solid 3px #43424A;
        border-radius: 15px;
        bottom: 50px;
        height: 120px;
        background-color: white;
        width: 80%;
        left: 100px;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .op_agregar{
        display: flex;
        justify-content: center;
        align-items:center;
        margin: auto;
        position: relative;
        top: 100px;
        width: 90%;
        border: solid #43424A;
        height: 80px;
        color:black;
        border-radius: 10px;
    }
    .op_agregar p{
        font-size: 25px;
    }
    .img_agregar{
        margin-right: 100px;
    }
    .mas{
        width: 55px;
        margin-left: 550px;
        opacity: 0.5;
    }
    .mas:hover{
        opacity: 0.9;
        cursor: pointer;
    }

</style>
<div class="contenedor_agregar">
    <div id="calorias">
        <div id="consumidas"> <?php echo "<h4>$consumidas"?><br>CONSUMIDAS</h4></div>
        <div id="restantes"><?php echo "<h3>$calorias"?><br>KCAL RESTANTES</h3></div>
        <div id="quemadas"><?php echo "<h4>$quemadas"?><br>QUEMADAS</h4></div>
    </div>
    <div id="estadistica">
        <div id="texto">
        <h3>Carbohidratos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Proteínas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Grasas</h3>
        <hr></div>
        <div id="numeros">
        <?php echo "$carbohidratos"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo "$proteinas"?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php echo "$grasas"?>   </h3>
        </div>
    </div>
    <div id="con_agregar">
        <div class="op_agregar">
            <img src="./img/alimento.png" width="60px" class="img_agregar">
            <p>Alimento</p>
            <a href="agregaralimentos.php"><img src="./img/mas.png" class="mas"></a>
        </div><br><br>
        <div class="op_agregar">
            <img src="./img/ejercicio.png" width="90px" class="img_agregar">
            <p>Ejercicio</p>
            <a href="agregarejercicio.php"><img src="./img/mas.png" class="mas"></a>
        </div>
    </div>
</div>
<?php require("./layout/footer.php")?>
