
<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>MejoraTuSalud</title>
        <link rel="stylesheet" href="./css/dis_buqueda.css">
        <link rel="stylesheet" href="./css/disrutina.css">
        <script src="./js/jquery.js"></script>
        <script src="./js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="package/dist/sweetalert2.css">
    </head>
<body>
    <header>
    <input type="search" id="input-search" placeholder="Buscar aqui alimento">
    
    <div class="content-search">
        <div class="content-table">
            <table id="table">
                <thead>
                    <tr>
                        <td></td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                    <tr>
                        <td><a href="#"></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</header>
<script src="./js/buscador.js"></script>
<div class="titulo">
        <a href="./agregar.php"><img src="./img/back.png" class="regresar busqueda"></a>
        <a href="./index.php"><img src="./img/home.jfif" class="regresar home2"></a>
            <img src="./img/logof.png" width="200px" height="auto">
        </div><br>
        <div class="contenedor_busqueda">
            <h1 class="h1">Agregar alimentos</h1><br><br>
            <div class="agregar_alimento">
                <div class="texto_a">1 huevo</div>
                <div class="btn_agregar" onclick="MostrarMensaje();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de carne de res</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de pollo</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de pescado</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de arroz</div>
                <div class="btn_agregar" onclick="MostrarMensaje3();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de frijol refrito</div>
                <div class="btn_agregar" onclick="MostrarMensaje3();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos espagueti rojo</div>
                <div class="btn_agregar" onclick="MostrarMensaje3();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de zanahoria</div>
                <div class="btn_agregar" onclick="MostrarMensaje4();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">100 gramos de salchicha</div>
                <div class="btn_agregar" onclick="MostrarMensaje();"><h3>Agregar<h3></div>
            </div>
        </div>
</div>
<script>
    function MostrarMensaje(){
        window.location.replace("agregar1.php") 
    }
    function MostrarMensaje2(){
        window.location.replace("agregar2.php") 
    }
    function MostrarMensaje3(){
        window.location.replace("agregar3.php") 
    }
    function MostrarMensaje4(){
        window.location.replace("agregar3.php") 
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
    .home2{
        top: 80px;
        left: 90%;
    }
    .busqueda{
        top:80px;
    }
    .contenedor_busqueda{
    text-align: center;
    width: 80%;
    height: auto;
    margin: auto;
    min-height: 400px;
    margin-top: 20px;
}
.agregar_alimento{
    width: 96%;
    height: 40px;
    background-color: #e05656;
    opacity: 0.9;
    margin: auto;
    margin-top: 5px;
    display: flex;
    border-radius: 10px;
}
.texto_a{
    height: 100%;
    width: 60%;
    margin-left: 40px;
    color: white;
    text-align: left;
    display: flex;
    align-items: center;
}
.btn_agregar{
    color: while;
    background-color: white;
    width: 20%;
    margin-left: 20%;
    border-radius: 10px;
    border: solid 2px #474947;
    display: flex;
    justify-content: center;
    align-items: center;
}
.btn_agregar:hover{
    background-color: #64E164;
    cursor: pointer;
}
</style>
</body>