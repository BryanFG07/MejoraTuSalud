
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
            <h1 class="h1">Agregar ejercicio</h1><br><br>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de dominadas</div>
                <div class="btn_agregar" onclick="MostrarMensaje();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de deadbug</div>
                <div class="btn_agregar" onclick="MostrarMensaje();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de jumping Jacks</div>
                <div class="btn_agregar" onclick="MostrarMensaje();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de sentadilla isométrica</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de comba</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de plancha</div>
                <div class="btn_agregar" onclick="MostrarMensaje2();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de plancha lateral</div>
                <div class="btn_agregar" onclick="MostrarMensaje3();"><h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 minutos de burpee</div>
                <div class="btn_agregar"onclick="MostrarMensaje3();"> <h3>Agregar<h3></div>
            </div>
            <div class="agregar_alimento">
                <div class="texto_a">10 zancada con peso</div>
                <div class="btn_agregar" onclick="MostrarMensaje3();"><h3>Agregar<h3></div>
            </div>
        </div>
</div>
<script>
    function MostrarMensaje(){
        window.location.replace("agregar_ejercicio1.php") 
    }
    function MostrarMensaje2(){
        window.location.replace("agregar_ejercicio2.php") 
    }
    function MostrarMensaje3(){
        window.location.replace("agregar_ejercicio3.php") 
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
    display: flex;
    border-radius: 10px;
    margin-top: 5px;
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