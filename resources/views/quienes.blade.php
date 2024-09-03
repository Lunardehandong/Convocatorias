<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NumerIQ</title>
    <link rel="stylesheet" href="assets/img/appis.css">
    <style> 

                /* Estilos personalizados */
                body {
                    font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
                    background-color: #D5D5D5;
                }
        
                .maines-container {
                    width: 100%;
                    text-align: left; /* Alinear contenido a la izquierda */
                }
        
                .maines-content {
                    display: inline-block; /* Para que el contenido esté en la misma línea */
                    width: 55%; /* Ancho del contenedor del contenido */
                    vertical-align: top; /* Alinear el contenido a la parte superior */
                }
        
                .maines-image-container {
                    display: inline-block; /* Para que la imagen esté en la misma línea */
                    width: 35%; /* Ancho del contenedor de la imagen */
                    margin-left: 20px; /* Margen izquierdo */
                }
                
                .maines-image-container img {
                    width: 80%; /* Ancho máximo de la imagen dentro del contenedor */
                    height: auto; /* Altura automática para mantener la proporción */
                }
        
                .maines-text {
                    margin-bottom: 30px;
                    color: black; /* Aplicar color de texto */
                    font-size: 19px; /* Aplicar tamaño de texto */
                    line-height: 2.0; /* Ajustar altura de línea */
                    text-align: justify; /* Alinear texto justificado */
                    margin-left: 10px; /* Margen  */
                }

                .maineo-text {
                    margin-bottom: 30px;
                    color: black; /* Aplicar color de texto */
                    font-size: 19px; /* Aplicar tamaño de texto */
                    line-height: 1.5; /* Ajustar altura de línea */
                    text-align: center; /* Alinear texto justificado */
                    margin-left: 10px; /* Margen  */
                }
        
                .maines-title {
                    font-size: 38px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center; /* Alinear texto al centro */
                    margin-bottom: 28px; /* Agregar espacio inferior */
                }
        
                .maines-subtitle {
                    font-size: 30px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center; /* Alinear texto al centro */
                    margin-bottom: 15px; /* Agregar espacio inferior */
                }

                .maines-container {
                    width: 100%;
                    text-align: center; /* Centrar contenido dentro del contenedor */
                }
        
                .contenido {
                    display: inline-block; /* Para que el contenido esté en la misma línea */
                    width: 55%; /* Ancho del contenedor del contenido */
                    vertical-align: top; /* Alinear el contenido a la parte superior */
                }
        
                .imagen-container {
                    display: inline-block; /* Para que la imagen esté en la misma línea */
                    width: 35%; /* Ancho del contenedor de la imagen */
                    margin-left: 20px; /* Margen izquierdo */
                }
                
                .imagen-container img {
                    width: 80%; /* Ancho máximo de la imagen dentro del contenedor */
                    height: auto; /* Altura automática para mantener la proporción */
                }
        
                .testimonio-texto {
                    margin-bottom: 30px;
                    color: black; /* Aplicar color de texto */
                    font-size: 19px; /* Aplicar tamaño de texto */
                    line-height: 2.0; /* Ajustar altura de línea */
                    text-align: justify; /* Alinear texto justificado */
                    margin-left: 10px; /* Margen  */
                }
        
                .masthead-title {
                    font-size: 38px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center;
                    margin-bottom: 22px; /* Agregar espacio inferior */
                }
        
                .masthead-subtitle {
                    font-size: 30px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center;
                    margin-bottom: 15px; /* Agregar espacio inferior */
                }

                .text-container {
                    text-align: center; /* Centra el contenido horizontalmente */
                }   

                .logo-text  a {
                    color: black;
                }
            
                .menu-link a {
                    color: black;
                }

                /* Estilos personalizados */
                .function-container {
                    width: 100%;
                    text-align: left; /* Alinear contenido a la izquierda */
                }

                .function-content {
                    display: inline-block; /* Para que el contenido esté en la misma línea */
                    width: 50%; /* Ancho del contenedor del contenido */
                    vertical-align: top; /* Alinear el contenido a la parte superior */
                }

                .function-title {
                    font-size: 38px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center; /* Alinear texto al centro */
                    margin-bottom: 28px; /* Agregar espacio inferior */
                }


                .btn-xl {
                    font-size: 30px; /* Aplicar tamaño de texto */
                    padding: 15px 30px; /* Ajustar relleno del botón */
                    background-color: #28ABDB; /* Color de fondo del botón */
                    color: #000; /* Color de texto del botón */
                    text-decoration: none; /* Eliminar subrayado del botón */
                    transition: background-color 0.3s ease; /* Agregar transición suave al color de fondo */
                    margin-left: 42% 
                }

                .function-subtitle {
                    font-size: 25px; /* Aplicar tamaño de texto */
                    font-weight: 1000;
                    text-align: center; /* Alinear texto al centro */
                    margin-bottom: 15px; /* Agregar espacio inferior */
                }

                .function-text {
                    margin-bottom: 35px;
                    color: black; /* Aplicar color de texto */
                    font-size: 18px; /* Aplicar tamaño de texto */
                    line-height: 1.5; /* Ajustar altura de línea */
                    text-align: justify; /* Alinear texto justificado */
                    margin-left: 20px;
                }

                .function-image-container {
                    display: inline-block; /* Para que la imagen esté en la misma línea */
                    width: 35%; /* Ancho del contenedor de la imagen */
                    margin-left: 20px; /* Margen izquierdo */
                }

                .text-container {
                    text-align: center; /* Centra el contenido horizontalmente */
                }    
                
                .principio-texto {
                    margin-bottom: 35px;
                    color: black; /* Aplicar color de texto */
                    font-size: 20px; /* Aplicar tamaño de texto */
                    line-height: 1.5; /* Ajustar altura de línea */
                }

                /* Estilos para el contenedor principal */
                .custom-container {
                    display: flex;
                    justify-content: space-between;
                    width: 100%;
                }
                
                /* Estilos para cada columna */
                .custom-column {
                    width: calc(50% - 20px); /* Ajusta el ancho según tu diseño */
                    padding: 10px;
                    background-color: #D5D5D5; /* Color de fondo de la columna */
                    border-radius: 10px; /* Bordes redondeados */
                    font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
                }

                /* Estilos para el contenido dentro de cada columna */
                .custom-column p {
                    margin: 0;
                    font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
                }
    </style>
</head>
<body>

    <!-- Contenedor navbar -->
    <div class="main-container">
 
 <!-- Encabezado superior -->
 <div class="social-bar">
     <div class="social-icon-container">
         <!-- Redes sociales Agregar enlaces correspondientes -->
         <img class="social-icon" src="assets/img/instagrams.svg" alt="Facebook" />
         <div class="social-text">Facebook</div>
         <img class="social-icon" src="assets/img/twitters.svg" alt="Twitter" />
         <div class="social-text">Twitter</div>
         <img class="social-icon" src="assets/img/instagrams.svg" alt="Instagram" />
         <div class="social-text">Instagram</div>
         <img class="social-icon" src="assets/img/youtubes.svg" alt="Youtube" />
         <div class="social-text">Youtube</div>
     </div>
 </div>
 
 
 <!-- Menú de navegación -->
 <div class="navigation-menu">
     <div class="logo-text-container">
         <!-- Logo -->
         <a href="{{ url('/welcome') }}">
            <img class="logo" src="assets/img/numerIQ.png" alt="NumerIQ Logo" />
        </a>
        
 
         <!-- Espacio entre el logo y el texto -->
     <div class="logo-text">NumerIQ</a></div>
 
     </div>
 
     <!-- Enlaces del menú enlaces correspondientes -->
     <div class="menu-links">
             <div class="menu-link"><a href="{{ url('/tutores') }}">Tutores</a></div>
             <div class="menu-link"><a href="{{ url('/tutorias') }}">Servicios</a></div>
             <div class="menu-link"><a href="{{ url('/proceso') }}">Ser Tutor</a></div>
             <div class="menu-link"><a href="{{ url('/blog') }}">Blog</a></div>
             <div class="menu-link"><a href="{{ url('/legal') }}">Legal</a></div>
 
         <a href="{{ url('/carritovacio_page') }}">
         <img class="cart-icon" src="assets/img/carrito.png" />
         </a>
 
 
         <div class="login-container">
             <a href="{{ route('login') }}">
     <img class="login-icon" src="assets/img/right-to-bracket-solid 1.svg" />
 </a>
 
         </div>
     </div>
 </div>
  <!-- Fin del navbar -->

    <!-- Contenedor principal -->
    <div class="maines-container">
       
        <!-- Texto de testimonio -->
        <h2 class="maines-title">Quienes somos y que es lo que hacemos?</h2>


        <div class="maines-content">
            <p class="maines-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>
        </div><!-- Fin del contenedor  -->

        <div class="maines-image-container">
            <img src="https://via.placeholder.com/200" alt="Placeholder image">
        </div>

        <!-- Fin del main contenedor  -->
    </div>


    <!-- Misma seccion pero al reves -->
    <div class="maines-container">

        <div class="imagen-container">
            <img src="https://via.placeholder.com/200" alt="Placeholder image">
        </div>

        <div class="contenido">
            <p class="testimonio-texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>
        </div>
        <!-- Fin del  contenedor  -->

        
        
    </div>

    <!--Funcion de las tutorias -->
    <div class="function-container">
        <!-- Titulo -->
        <h2 class="function-title">¿Cómo funcionan las tutorías?</h2>
    </div>
    
    <!-- Primera sección -->
    <div class="function-content">
            <h3 class="function-subtitle">¿Cómo programar una tutoría?</h3>
            <p class="function-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>

            <h3 class="function-subtitle">¿Comó se lleva a cabo una tutoria?</h3>
            <p class="function-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>
 
    </div><!-- Fin del contenedor -->

    <!-- Imagen a la derecha -->
        <div class="function-image-container">
            <img src="https://via.placeholder.com/400" alt="Placeholder image">
        </div><!-- Fin del contenedor -->

        <!--Funcion de las tutorias pero al reves -->
        <div class="function-container">
            <!-- Titulo -->
            <h2 class="function-title">¿Cómo funcionan las tutorías?</h2>
        </div>
        
        <!-- Primera sección -->

        <!-- Imagen a la derecha -->
        <div class="function-image-container">
            <img src="https://via.placeholder.com/400x600" alt="Placeholder image">
        </div><!-- Fin del contenedor -->

        <div class="function-content">
                <h3 class="function-subtitle">¿Qué esperar de una tutoria?</h3>
                <p class="function-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                    fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                    Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                    fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                </p>
    
                <h3 class="function-subtitle">Los diferentes tipos de tutorias que ofrecemos</h3>
                <p class="function-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                    fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                    Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                </p>
     
        </div><!-- Fin del contenedor -->

        <!-- Garantia -->
        <div class="text-container">
            <!-- Titulo -->
            <h2 class="masthead-title">Preguntas frecuentes</h2>
        </div>

        <!-- Columnas hacia abajo -->

        <div class="custom-container">
            <div class="custom-column">
                <details>
                    <summary>¿Cuánto cuestan las tutorías?</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
                <details>
                    <summary>¿Qué pasa si no estoy satisfecho con mi tutoría?</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
                <details>
                    <summary>Recursos para tutoría</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
            </div>
            <div class="custom-column">
                <details>
                    <summary>¿Cuánto cuestan las tutorías?</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
                <details>
                    <summary>¿Qué pasa si no estoy satisfecho con mi tutoría?</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
                <details>
                    <summary>Recursos para tutoría</summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores deserunt corporis quam labore saepe vitae dolores quis</p>
                </details>
            </div>
        </div> <!-- Fin del contenedor -->

        

        <!-- Contenedor centrado -->
        <div class="text-container">
            <!-- Titulo -->
            <h2 class="masthead-title">Recomendaciones</h2>
            <p class="principio-texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
            </p>
        </div>
        <!-- fin Contenedor centrado -->

        <!-- Garantia -->
        <div class="text-container">
            <!-- Titulo -->
            <h2 class="masthead-title">Garantia</h2>
        </div>

        <div class="maines-content">
            <p class="maineo-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>
        </div><!-- Fin del contenedor  -->

        <div class="maines-image-container">
            <img src="https://via.placeholder.com/200x250" alt="Placeholder image">
        </div>


        <!--Ultima seccion -->
    <div class="function-container">
        <!-- Titulo -->
        <h2 class="function-title">¿Qué estas esperando?</h2>
        <!-- Botón -->
        <a class="btn btn-xl rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class="fas fa-download me-2"></i>
            ¡Unete ya!
        </a>
    </div>
</body>
@include('layouts.footer')
</html>
