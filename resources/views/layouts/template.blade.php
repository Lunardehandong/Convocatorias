<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
            <title>NumerIQ</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Nexa Font -->
    <link href="https://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    </head>
     <body id="page-top" class="bg-dark">

    <!-- Include the navigation bar -->
        @include('layouts.navasize')

        <div class="container d-flex align-items-center text-white justify-content-center">
        <!-- Primer texto centrado -->
        <h1 class="masthead-heading text-uppercase mb-0">¡Te estamos buscando!</h1>
    </div>
<section class="page-section text-white" id="testimonios">
    <style>
        /* Estilos personalizados */
        .contenido {
            margin-bottom: 30px; /* Espacio entre los cuadros */
        }
        .contenido .testimonio-content {
            padding: 20px; /* Espacio interno de los cuadros */
            border-radius: 35px; /* Bordes circulares */
        }
        .masthead-avatar {
            margin-bottom: 10px; /* Espacio inferior de la imagen */
        }
        .testimonio-texto {
            margin-bottom: 10px; /* Espacio inferior del texto */
        }
    </style>
    
    <div class="container">
        <div class="row">
            <!-- Masthead Avatar Image a la izquierda -->
            <div class="col-md-6 order-md-1">
                <div class="container d-flex align-items-center justify-content-center">
                    <!-- Primer texto centrado con margen inferior -->
                </div>
                <img class="masthead-avatar mb-5" src="assets/img/a.png" alt="..." style="width: 100%; max-width: 400px;" />
            </div>
            <!-- Testimonio Único a la derecha -->
            <div class="col-md-6 order-md-2">
                <div class="contenido">
                    <div class="testimonio-content">
                        <!-- Texto de testimonio -->
                        <h2 class="masthead-subtitle text-uppercase mb-4">Imparta cursos y gane beneficios</h2> <!-- Agrega un margen inferior -->
                        <p class="testimonio-texto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                            fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                            Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                            <span class="leer-mas" style="display: none;"> Leer más...</span>
                        </p>
            <!-- Botón -->
            <div class="text-center mt-4">
             <a class="btn btn-xl btn-outline-light active rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class="fas fa-download me-2"></i>
            ¡Unete ya!
             </a>
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Segunda seccion -->
    <section class="page-section bg-dark convocatoria-section" id="convocatoria" style="margin-bottom: 30px;">
        <div class="container">
            <!-- textos-->
            <h2 class="convocatoria-heading text-center text-uppercase text-white mb-4">Razones por las cuales dar clases con nosotros</h2>
            <p class="convocatoria-subheading font-weight-light mb-3 text-white text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.
                Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor
                finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>

            <img class="masthead-avatar mb-5" src="assets/img/a.png" alt="..." style="width: 100%; max-width: 400px;" />

            <!-- Convocatoria Button -->
           <div class="text-center mt-4 convocatoria-button">
            <a class="btn btn-xl btn-outline-light active rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="fas fa-download me-2"></i>
                Regístrate ahora
            </a>
        </div>
        </div>
    </section>
 <!-- Ventajas de clases -->
<section class="page-section" id="testimonios">
    <style>
    /* Estilos personalizados para los cuadros de testimonio */
    .testimonio-item {
        margin-bottom: 30px; /* Reducir el espacio entre los cuadros */
        background-color: #D5D5D5; /* Fondo gris para los cuadros */
        text-align: center; /* Centrar el contenido del cuadro */
        border-radius: 10px; /* Bordes circulares */
        padding: 15px; /* Espacio interno del cuadro */
        max-width: 200px; /* Ancho máximo del cuadro */
        margin: 0 auto; /* Centrar los cuadros */
    }

    /* Ajustar tamaño de los íconos de nube */
    .testimonio-item svg {
        margin-bottom: 5px; /* Agregar margen inferior para separar el ícono del texto */
        width: 30px; /* Ajustar el tamaño del ícono */
        height: 30px;
    }

    /* Estilos para el texto del testimonio */
    .testimonio-nombre {
        margin-bottom: 5px; /* Reducir el espacio entre el nombre y el texto */
        font-size: 16px; /* Tamaño de fuente del nombre */
    }

    .testimonio-texto {
        font-size: 14px; /* Tamaño de fuente del texto */
    }
</style>


    <div class="container">
        <!-- Convocatoria Section Heading-->
        <h2 class="convocatoria-heading text-center text-uppercase text-white mb-5">Ventajas de dar clase online</h2>
        <div class="container">
            <div class="row justify-content-center"> <!-- Centrar las columnas -->
                <!-- Testimonio 1 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 1"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 2"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 3"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                
            </div>
        </div>

    </div>
</section>

<!-- Ventajas de clases con numerIQ -->
<section class="page-section" id="testimonios">
    <style>
    /* Estilos personalizados para los cuadros de testimonio */
    .testimonio-item {
        margin-bottom: 30px; /* Reducir el espacio entre los cuadros */
        background-color: #D5D5D5; /* Fondo gris para los cuadros */
        text-align: center; /* Centrar el contenido del cuadro */
        border-radius: 10px; /* Bordes circulares */
        padding: 15px; /* Espacio interno del cuadro */
        max-width: 200px; /* Ancho máximo del cuadro */
        margin: 0 auto; /* Centrar los cuadros */
    }

    /* Ajustar tamaño de los íconos de nube */
    .testimonio-item svg {
        margin-bottom: 5px; /* Agregar margen inferior para separar el ícono del texto */
        width: 30px; /* Ajustar el tamaño del ícono */
        height: 30px;
    }

    /* Estilos para el texto del testimonio */
    .testimonio-nombre {
        margin-bottom: 5px; /* Reducir el espacio entre el nombre y el texto */
        font-size: 16px; /* Tamaño de fuente del nombre */
    }

    .testimonio-texto {
        font-size: 14px; /* Tamaño de fuente del texto */
    }

    /* Agregar margen inferior solo a los primeros tres cuadros */
    .testimonio-item:nth-child(-n+3) {
        margin-bottom: 60px; /* Agregar margen inferior solo a los primeros tres cuadros */
    }
</style>


    <div class="container">
        <!-- Convocatoria Section Heading-->
        <h2 class="convocatoria-heading text-center text-uppercase text-white mb-5">Ventajas de dar clase online con numerIQ</h2>
        <div class="container">
            <div class="row justify-content-center"> <!-- Centrar las columnas -->
                <!-- Testimonio 1 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 1"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 2"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 3"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 4 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 4"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 5 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 5"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Testimonio 6 -->
                <div class="col-md-4 text-white">
                    <div class="testimonio-item">
                        <!-- Icono a la izquierda -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                        </svg>
                        <!-- Nombre -->
                        <h4 class="testimonio-nombre">"Razon 6"</h4>
                        <!-- Texto de testimonio -->
                        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                
            </div>
        </div>

    </div>
</section>

<section class="page-section text-white" id="testimonios">
    <h2 class="convocatoria-heading text-center text-uppercase text-white mb-5">Requisitos para unirte al equipo</h2>
    <div class="container">
        <div class="row">
            <!-- Masthead Avatar Image a la izquierda -->
            <div class="col-md-6 order-md-1">
                <img class="masthead-avatar mb-5" src="assets/img/fondo.jfif" alt="..." style="width: 90%; max-width: 1900px; margin-left: 60px;" />
            </div>
            <!-- Testimonio Único a la derecha -->
            <div class="col-md-6 order-md-2">
                <!-- Ajusta el ancho del contenedor de texto y el margen derecho aquí -->
                <div class="new-section-content text-start ms-auto" style="width: 60%; /* Ajusta el ancho */ font-size: 16px; /* Tamaño de fuente */ margin-right: 20px; /* Ajusta el margen derecho */">
                    <!-- Bloques de Texto -->
                    <div class="new-section-text mb-3" style="background-color: #D5D5D5; padding: 15px; border-radius: 10px; margin-bottom: 10px;"> <!-- Agregar margen inferior -->
                        <h3 class="new-section-subheading text-uppercase mb-2">Requisitos</h3>
                        <p class="font-weight-light mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                            fringilla porta ante.
                        </p>
                    </div>
                    <div class="new-section-text mb-3" style="background-color: #D5D5D5; padding: 15px; border-radius: 10px; margin-bottom: 10px;"> <!-- Agregar margen inferior -->
                        <h3 class="new-section-subheading text-uppercase mb-2">Requisitos</h3>
                        <p class="font-weight-light mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                            fringilla porta ante.
                        </p>
                    </div>
                    <div class="new-section-text mb-3" style="background-color: #D5D5D5; padding: 15px; border-radius: 10px;"> <!-- No se agrega margen inferior para el último elemento -->
                        <h3 class="new-section-subheading text-uppercase mb-2">Requisitos</h3>
                        <p class="font-weight-light mb-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                            fringilla porta ante.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botón -->
        <div class="text-center mt-3">
            <a class="btn btn-xl btn-outline-light active rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="fas fa-download me-2"></i>
                ¡Únete ya!
            </a>
        </div>
    </div>
</section>



<!-- Comunicados Section -->
<section class="page-section" id="comunicados">
    <style>
        /* Estilos personalizados */
        .comunicado-item {
            margin-bottom: 30px; /* Espacio entre los cuadros */
            background-color: #D5D5D5; /* Fondo gris para los cuadros */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efecto de sombra */
        }
        .comunicado-item .comunicado-content {
            padding: 20px; /* Espacio interno de los cuadros */
            border-radius: 35px; /* Bordes circulares */
        }
    </style>

    <div class="container">
        <!-- Convocatoria Section Heading-->
        <h2 class="convocatoria-heading text-center text-uppercase text-white mb-5">Comunicados de tutores</h2>
        <div class="container">
            <div class="row">

                <!-- Comunicado 1 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comunicado 2 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comunicado 3 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comunicado 4 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comunicado 5 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Comunicado 6 -->
                <div class="col-md-4 text-white">
                    <div class="comunicado-item" style="border-radius: 15px;">
                        <div class="comunicado-content">
                            <!-- Icono a la izquierda -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                                <!-- Círculo blanco más grande -->
                                <circle cx="8" cy="8" r="8" fill="#FFF"/>
                                <!-- Icono de persona azul -->
                                <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            <!-- Nombre -->
                            <h4 class="comunicado-nombre">"Fulanito Pérez"</h4>
                            <!-- Icono de estrellas (puedes reemplazarlo con el icono real) -->
                            <div class="estrellas">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <!-- Texto de testimonio -->
                            <p class="comunicado-texto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                                <span class="leer-mas" style="display: none;"> Leer más...</span>
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>


    <!-- Include the footer -->
    @include('layouts.footer')

<!-- Asegúrate de tener jQuery antes de Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Esperar a que todo el DOM esté listo
    $(document).ready(function() {
        // Función para manejar la confirmación de contacto
        window.contactConfirmation = function() {
            alert("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.");
            $('#contactModal').modal('hide'); // Cierra el primer modal
            $('#accreditedModal').modal('show'); // Abre el segundo modal
        };
    });
</script>

<!-- Modal 1: Formulario de 6 preguntas con mensaje de contacto -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <!-- Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Formulario de Contacto</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Formulario de 6 preguntas -->
                            <form>
                                <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 1</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>
                               
                               <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 2</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>

                                <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 3</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>

                                <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 4</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>

                                <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 5</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>

                                <div class="mb-3">
                                    <label for="question1" class="form-label fs-6">Pregunta 6</label>
                                    <input type="text" class="form-control" id="question1">
                                </div>

                               <!-- Botones -->
                                <div class="d-grid gap-2">
                                    <button class="btn btn-warning btn-lg" type="button" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar
                                    </button>
                                    <button class="btn btn-success btn-lg" type="button" onclick="contactConfirmation()">
                                        <i class="fas fa-check fa-fw"></i>
                                        Confirmar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Mensaje personalizado "Acreditado" -->
<div class="modal fade" id="accreditedModal" tabindex="-1" aria-labelledby="accreditedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0">
                <!-- Elimina el atributo data-bs-dismiss="modal" para evitar que el modal se cierre -->
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Mensaje Acreditado</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Modal - Text-->
                            <p class="mb-4">Mensaje acreditado para mostrar aquí.</p>
                            <!-- Botones para WhatsApp y Correo -->
                            <div class="d-grid gap-2">
                                <button class="btn btn-success btn-lg" type="button" onclick="openWhatsApp()">
                                    <i class="fab fa-whatsapp me-2"></i>
                                    WhatsApp
                                </button>
                                <button class="btn btn-secondary btn-lg" type="button" onclick="openEmail()">
                                    <i class="fas fa-envelope me-2"></i>
                                    Correo
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Imagen "b" -->
                            <img class="img-fluid rounded mb-5" src="assets/img/b.png" alt="Imagen B" />
                            <!-- Texto de Lorem Ipsum -->
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script para abrir WhatsApp -->
<script>
    function openWhatsApp() {
        // Coloca aquí el código para abrir WhatsApp
        alert("Abriendo WhatsApp");
    }
</script>

<!-- Script para abrir Correo Electrónico -->
<script>
    function openEmail() {
        // Coloca aquí el código para abrir el Correo Electrónico
        alert("Abriendo Correo Electrónico");
    }
</script>



