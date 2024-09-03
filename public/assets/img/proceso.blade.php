
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NumerIQ</title>
                <link rel="stylesheet" href="assets/img/appes.css">
    </head>
    <body>
<style>
        /* Estilos para los enlaces "Tutores" y "Servicios" */

        .logo-text  a {
            color: black;
        }

        .menu-link a {
            color: black;
        }
    </style>
    <body>
     <!-- Contenedor principal -->
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
        <img class="logo" src="assets/img/numerIQ.png" />

        <!-- Espacio entre el logo y el texto -->
    <div class="logo-text"><a href="{{ url('/welcome') }}">NumerIQ</a></div>

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
 <!-- Fin contendedor principal -->


    <!-- Titulo-->
    <div class="legal-page-title">Legal</div>


<!-- Entradas de blog -->
<div class="legal-entrada-container">
 
<!-- Contenido legal parte 1 -->
<div class="content-legal">
  <div id="aviso-legal" class="content-legal-title">Aviso legal</div>
    <div id="aviso-legal" class="content-tutores-title-right">Aviso legal</div>

  <div class="content-legal-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="content-legal-subtitle">Subtitulo 1</div>
  <div class="content-legal-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="div-legal"></div>

  <!-- Contenido legal parte 2 -->
  <div id="politicas-privacidad" class="content-blog-title">Politicas de privacidad</div>
  <div class="content-blog-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="div-legal"></div>

     <!-- Contenido legal parte 3 -->
  <div id="terminos" class="content-blog-title">Terminos</div>
  <div class="content-blog-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="div-legal"></div>

      <!-- Contenido legal parte 3 -->
  <div id="politicas-cookies" class="content-blog-title">Politica de cookies</div>
  <div class="content-blog-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="div-legal"></div>

      <!-- Contenido legal parte 4 -->
      <div  id="datos-contacto" class="content-legal-title">Datos de contacto</div>
  <div class="content-legal-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="content-legal-subtitle">Subtitulo 1</div>
  <div class="content-legal-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
    <div class="div-legal"></div>


</div><!-- Fin Contenido legal  -->



</div>
 <!-- Fin  -->

  <!-- Pie de página agregar enlaces correspondientes -->
  @include('layouts.footer')
    <!--Fin pie de pagina-->

</body>
</html>
