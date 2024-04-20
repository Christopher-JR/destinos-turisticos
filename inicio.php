<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Viajero CR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->    
    <link href="lib/owlcarousel/assets/owl.mi-carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/prueba.css">
    
    <?php
    
    include("preferencia.php");
    header("../Registro.php");
?>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>Usuario</p>
                        <p class="text-body px-3">|</p>
                        <p><?php echo "".$usuario = $_SESSION['usuario']?></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/christopherju%C3%A1rezrojas/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/chris_jr06/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://github.com/Christopher-JR">
                        <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">VIAJERO</span>CR</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="inicio.php" class="nav-item nav-link active">Home</a>
                        <a href="recomendaciones.php" class="nav-item nav-link">Recomendaciones</a>
                        <a href="Nosotros.php" class="nav-item nav-link">Nosotros</a>
                        <a href="CerrarSesion.php" class="nav-item nav-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/playaPrincipal.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">DESTINO</h4>
                            <h1 class="display-3 text-white mb-md-4">PLAYAS</h1>
                            <a href="#zonaPlayas" class="btn btn-primary py-md-3 px-md-5 mt-2">DESTINOS DE PLAYA</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/sj.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">DESTINO</h4>
                            <h1 class="display-3 text-white mb-md-4">CIUDAD</h1>
                            <a href="#zonaCiudad" class="btn btn-primary py-md-3 px-md-5 mt-2">DESTINOS DE CIUDADES</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/montañaPrincipal.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">DESTINO</h4>
                            <h1 class="display-3 text-white mb-md-4">MONTAÑA</h1>
                            <a href="#zonaMontana" class="btn btn-primary py-md-3 px-md-5 mt-2">DESTINOS DE MONTAÑAS</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Packages PLAYAS Start -->
    <div id="zonaPlayas" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">DESTINOS</h6>
                <h1>PLAYAS</h1>
            </div>
        <div class="row">
        <?php
        include("conexion.php");
        $query = "SELECT * FROM destinos";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()) {
            $tipoDestino = $row['tipoDestino'];
            if($row['tipoDestino'] == 1){
                ?>    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']) ?>" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Costa Rica</small>
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $row['ubicacion']?></small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 Días</small>
                                </div>
                                <a class="h5 text-decoration-none" href="guardarPreferencia.php?idDestino=<?php echo $row['idDestino']?>&tipoDestino=<?php echo $tipoDestino ?>">
                                <?php echo $row['nombreDestino']?></a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>5</h6>
                                        <h5 class="m-0"><?php echo $row['precio'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                     
                <?php
            }
            
        }

        ?>
        </div>
    </div>
</div>

<script>
    // Función para enviar el ID del destino a otro HTML
    function sendDestinationId(idDestino) {
        window.location.href = 'Historial.php?id=' + idDestino;
    }

    // Obtener todos los elementos del nombre del destino
    const destinationLinks = document.querySelectorAll('.destination-link');

    // Agregar un controlador de eventos de clic a cada nombre del destino
    destinationLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

            // Obtener el ID del destino desde el atributo data
            const idDestino = this.getAttribute('data-id-destino');

            // Llamar a la función para enviar el ID del destino
            sendDestinationId(idDestino);
        });
    });
</script>

<?php
    ?>
    <!-- Packages PLAYAS End -->
<?php
?>

<!-- Packages CIUDAD Start -->
<div id="zonaCiudad" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">DESTINOS</h6>
                <h1>CIUDAD</h1>
            </div>
            <div class="row">
    <?php
        include("conexion.php");
        $query = "SELECT * FROM destinos";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()) {
            if($row['tipoDestino'] == 2){
                ?>    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']) ?>" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Costa Rica</small>
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $row['ubicacion']   ?></small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 Días</small>
                                </div>
                                <a class="h5 text-decoration-none" href="guardarPreferencia.php?idDestino=<?php echo $row['idDestino'] ?>&tipoDestino= 2">
                                <?php echo $row['nombreDestino'] ?></a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>5</h6>
                                        <h5 class="m-0"><?php echo $row['precio'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                <?php
            }
        }

        ?>
        </div>
    </div>
</div>

<?php
    ?>
    <!-- Packages CIUDAD End -->
<?php
?>

<!-- Packages MONTAÑA Start -->
<div id="zonaMontana" class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">DESTINOS</h6>
                <h1>MONTAÑA</h1>
            </div>
            <div class="row">
    <?php
        include("conexion.php");
        $query = "SELECT * FROM destinos";
        $resultado = $conexion->query($query);
        while($row = $resultado->fetch_assoc()) {
            if($row['tipoDestino'] == 3){
                ?>    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']) ?>" alt="">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Costa Rica</small>
                                    <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i><?php echo $row['ubicacion']   ?></small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 Días</small>
                                </div>
                                <a class="h5 text-decoration-none" href="guardarPreferencia.php?idDestino=<?php echo $row['idDestino'] ?>&tipoDestino=<?php echo $tipoDestino ?>">
                                <?php echo $row['nombreDestino'] ?></a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>5</h6>
                                        <h5 class="m-0"><?php echo $row['precio'] ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       
                <?php
            }
            
        }

        ?>
        </div>
    </div>
</div>

<?php
    ?>
    <!-- Packages Montaña End -->
<?php
?>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">Viajero</span>CR</h1>
                </a>
                <p>Esta página fue creada como proyecto personal con fines académicos, integrando tecnologías como php, bases de datos y un algoritmo de sistema experto, la cual se basa para la toma de decisiones, tiene como objetivo recomendar 3 opciones de lugares turísticos y con base a las preferencias históricas del usuario la página se personalice a esta, además, presenta un apartado de sugerencias de destinos según sus preferencias ya antes seleccionadas.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">SIGUENOS</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://github.com/Christopher-JR"><i class="fab fa-github"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/in/christopherju%C3%A1rezrojas/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/chris_jr06/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">NUESTROS SERVICIOS</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="recomendaciones.php"><i class="fa fa-angle-right mr-2"></i>Recomendaciones</a>
                    <a class="text-white-50 mb-2" href="Nosotros.php"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Alajuela, Costa Rica</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+506 1234 5678</p>
                <p><i class="fa fa-envelope mr-2"></i>cristopherjr10@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Boletin Informativo</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Sugerencias">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; Todos los derechos son reservados.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>