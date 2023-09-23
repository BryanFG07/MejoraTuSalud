<?php
include("bd.php");

if(isset($_POST["ingresar"])){
    if(strlen($_POST['nombre'])>=1 &&
    strlen($_POST['apellido'])>=1 &&
    strlen($_POST['usuario'])>=1 &&
    strlen($_POST['password'])>=1){
        $NOMBRE=$_POST['nombre'];
        $APELLIDO=$_POST['apellido'];
        $USUARIO=$_POST['usuario'];
        $PASSWORD=$_POST['password'];
        $consult= "INSERT INTO usuario(nombre, apellido, usuario, password) VALUES ('$NOMBRE','$APELLIDO','$USUARIO','$PASSWORD')";
        $resultado=mysqli_query($conexion,$consult);
        if($resultado){
            $consult2= "INSERT INTO control_calorias(calorias, carbohidratos, proteinas, grasas, consumidas, quemadas) VALUES ('2300','0','0','0','0','0')";
            $resultado2=mysqli_query($conexion,$consult2);
            $consult3= "INSERT INTO peso(peso_actual) VALUES ('0')";
            $resultado3=mysqli_query($conexion,$consult3);
            header("location: registroexitodo.php");
            
        }else{
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }
    }else{
        ?>
        <h3 class="bad">Por favor complete los campos</h3>
        <?php
    }
}
?>