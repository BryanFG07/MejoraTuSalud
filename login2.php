<!DOCTYPE html>

<html lang="es">
    
    <head>
        <meta charset="utf-8">
        <title>Login Mejora Tu Salud </title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/dis_login.css">
        <style type="text/css">
        </style>
        <script type="text/javascript">
        </script>
        </head>
    <body>
        <div class="img_logo"><img src="./img/logo2.png" width="300px", height="auto"></div><br>
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form id="loginform" method="post" action="validar.php">   
                        <input type="text" name="usuario" placeholder="Usuario" require>
                        
                        <input type="password" placeholder="Contraseña" name="password" require>
                        
                        <button type="submit" title="Ingresar" name="ingresar">Iniciar Sesión</button>
                        <div class="error"><p>Usuario no encontrado</p></div>
                    </form>
                    <div class="pie-form">
                        <a href="./registrarse.php">¿No tienes cuenta? Registrate</a>
                        <br><br><br>
                    </div>
                </div>
            
            </div>
        </div>
        <style>
            .error{
                width: 100%;
                height: 20px;
                text-align: center;
                color: red;
            }
        </style>
    </body>
</html>