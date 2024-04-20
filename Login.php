<?php
    #Hacemos la validación para el inicio de sesión
    
    #Capturamos los campos
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    #Hacemos la conexión a la BD
    $conexion = mysqli_connect('localhost', 'root', '', 'destinosturisticos') or die(mysqli_connect_error());


    #Hacemos la consulta de validación
    $consulta = "SELECT * FROM usuarios WHERE correo = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    #Almacenamos los datos encontrados en la BD
    $filas = mysqli_num_rows($resultado);

    session_start();
    $_SESSION['usuario'] = $usuario;

    #Si se encontró datos que nos redirija sino que no deje en la misma página y nos indique un error
    if($filas){
        #Inicio de sesión        
        header("location: inicio.php");
    }else{
        ?>
        <?php
        include("index.html");
        ?>
        <h2>Datos erroneos. Intente otra vez!</h2>
        <?php
    }
    #Libero la memoria y cierro la consulta
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
