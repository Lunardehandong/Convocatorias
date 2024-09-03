<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NumerIQ</title>
    <link href="css/app.css" rel="stylesheet" />
    <style>
        /* Estilos para los enlaces "Tutores" y "Servicios" */

        .logo-text  a {
            color: black;
        }


        .menu-link a {
            color: black;
            font-size: 20px;
            font-weight: 400;
        }
    </style>
</head>
<body>

   <!-- Contenedor principal -->
   <div class="main-container">

    <!-- Encabezado superior -->
    <div class="social-bar">
        <div class="social-icon-container">
            <!-- Redes sociales enlazar el link de las redes sociales -->
            <img class="social-icon" src="assets/img/facebooks.svg" alt="Facebook" />
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
            <img class="logo" src="assets/NumerIQ.png" />

            <!-- Espacio entre el logo y el texto -->
<div class="logo-text"><a href="{{ url('/welcome') }}">NumerIQ</a></div>
        </div>

        <!-- Enlaces del menú enlaces correspondientes -->
    <div class="menu-links">
            <div class="menu-link"><a href="{{ url('/perfil_tutores') }}">Tutores</a></div>
            <div class="menu-link"><a href="{{ url('/quienes') }}">Servicios</a></div>
            <div class="menu-link"><a href="{{ url('/template') }}">Ser Tutor</a></div>
            <div class="menu-link"><a href="{{ url('/blog') }}">Blog</a></div>
            <div class="menu-link"><a href="{{ url('/legal') }}">Legal</a></div>

        <a href="{{ url('/carritovacio_page') }}">
        <img class="cart-icon" src="assets/img/carrito.png" />
        </a>


        <div class="login-container">
            <img class="login-icon" src="assets/img/right-to-bracket-solid 1.svg" />
        </div>
    </div>
</div>
 <!-- Fin contendeor principal -->