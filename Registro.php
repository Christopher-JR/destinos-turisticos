<?php
  #Registramos nuevos usuarios a la BD
  
  #Conexión a la BD
  $conexion = mysqli_connect('localhost', 'root', '', 'destinosturisticos') or die(mysqli_connect_error());
    
  #Llamamos a la función registrar
  registrar($conexion);

  #Capturamos los campos de html (Registro) 
  function registrar($conexion){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    #$hash = password_hash($contraseña, PASSWORD_DEFAULT, ['cost' => 10]); #Asignamos HASH a las contraseñas
    $preferencia = $_POST['preferencia'];

    #Hacemos la consulta para ingresar los datos a la BD
    $consulta = "INSERT INTO usuarios (nombre, apellidos, correo, contraseña, preferencia)
                VALUES ('$nombre', '$apellidos', '$correo', '$contraseña', '$preferencia')";
      
    #Ejecutamos la consulta
    $resultado = mysqli_query($conexion, $consulta);
      
    #Comprobamos el resultado de la consulta
    if ($resultado){
      #echo "Registro exitoso";
      ?><h3>Se ha registrado correctamente!</h3><?php
      mysqli_close($conexion);  // Cierra la conexión solo si la consulta fue exitosa
      include("index.html");
    }else {
      #echo 'Error al registrar: '.mysqli_error($conexion);   
      ?><h3 style="z-index: 1;">Error al registrarse, intente de nuevo!</h3><?php      
      mysqli_close($conexion);  // También cierra la conexión en caso de error
      include("Registro.html");
    }
  }
?>