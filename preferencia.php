<?php
    session_start();
    $usuario = $_SESSION['usuario'];

    destinoVisitado($usuario);
    function destinoVisitado($usuario) {
        // Conectar a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "destinosturisticos");
    
        // Crear la consulta SQL
        $consulta = "SELECT tipoDestino, COUNT(*) AS cantidad
                    FROM preferencias
                    WHERE correo = '$usuario'
                    GROUP BY tipoDestino
                    ORDER BY cantidad DESC
                    LIMIT 1";
    
        // Ejecutar la consulta
        $resultado = mysqli_query($conexion, $consulta);
    
        // Obtener el resultado
        $fila = mysqli_fetch_assoc($resultado);

    
        // Cerrar la conexión
        mysqli_close($conexion);
    
        if($fila > 0){
            switch ($fila['tipoDestino']) {
                case 1:
                    $color = "#0099FF";  // azul
                    break;
                case 2:
                    $color = "#808080";  // gris
                    break;
                case 3:
                    $color = "#6df26d";  // verde
                    break;
                default:
                    $color = "white";
            }        
            echo "<style>body {background-color: $color;}</style>";
        }else{
            echo "<style>body {background-color: white;}</style>";
        }      
    }
?>
