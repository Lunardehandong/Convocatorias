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
     <!-- Contenedor principal -->
   <div class="main-container">

<!-- Encabezado superior -->
<div class="social-bar">
    <div class="social-icon-container">
        <!-- Redes sociales Agregar enlaces correspondientes -->
        <img class="social-icon" src="{{ asset('img/facebook.svg') }}" alt="Facebook" />
        <div class="social-text">Facebook</div>
        <img class="social-icon" src="{{ asset('img/twitter.svg') }}" alt="Twitter" />
        <div class="social-text">Twitter</div>
        <img class="social-icon" src="{{ asset('img/instagram.svg') }}" alt="Instagram" />
        <div class="social-text">Instagram</div>
        <img class="social-icon" src="{{ asset('img/youtube.svg') }}" alt="Youtube" />
        <div class="social-text">Youtube</div>
    </div>
</div>


<!-- Menú de navegación -->
<div class="navigation-menu">
    <div class="logo-text-container">
        <!-- Logo -->
        <img class="logo" src="{{ asset('img/numerIQ.png') }}" />

        <!-- Espacio entre el logo y el texto -->
        <div class="logo-text">NumerIQ</div>
    </div>

    <!-- Enlaces del menú enlaces correspondientes -->
    <div class="menu-links">
        <div class="menu-link">Tutores</div>
        <div class="menu-link">Servicios</div>
        <div class="menu-link">Ser Tutor</div>
        <div class="menu-link">Blog</div>
        <img class="cart-icon" src="{{ asset('img/carrito.png') }}" />

        <div class="login-container">
            <img class="login-icon" src="{{ asset('img/right-to-bracket-solid 1.svg') }}" />
        </div>
    </div>
</div>
 <!-- Fin contendeor principal -->

<!-- Contenido principal -->
<div class="main-content">
    <!-- Título "Carrito de compras" -->
    <div class="title">Pago exitoso, usted pago:</div>

    <!-- Separador horizontal -->
    <div class="horizontal-separator"></div>
    <!-- Informacion curso -->
    <div class="course-info-container">
         <!-- Descripción del curso (Este texto debe ser dinámico y venir de la base de datos) -->
            
        <div class="course-info">
            <div class="course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</div>
            <!-- Titulo del curso (Este texto debe ser dinámico y venir de la base de datos) -->
           
            <div class="course-title">Titulo del curso</div>
        </div>
    </div>
    <!-- Precio -->
    <div class="price-container">
        <div class="price-info">
            <div class="price-background"></div>
             <!-- Texto para el precio (Este texto debe ser dinámico y venir de la base de datos) -->
            <div class="total-price">MX$ 350</div>
            <div class="total-text">Usted pago:</div>
        </div>
            <div class="payment-only-text">
                ¿Algun problema o duda?<br>
                 No dude en contactar a nuestro soporte tecnico: soporte@gmailcom</div>
        
        </div>
    </div>

    <!-- Tarjeta de confirmación de pago -->
    <div id="confirmacionPago" class="confirmation-card">
        <!-- Mensaje de confirmación -->
        <div class="division1"></div>
        <div class="confirmation-message-pago">Pago exitoso, gracias por su preferencia.</div>
        <div class="division2"></div>
        <!-- Botones -->
        <div class="confirmation-buttons-pago">
            <!-- Botón "Ver detalles" -->
            <div class="return-button-container-pago">
                <div class="return-button-background-pago"></div>
                <div class="return-button-border-pago"></div>
                <div class="return-button-text-pago" onclick="ocultarConfirmacionPago()">Ver detalles</div>
            </div>
        </div>
    </div>

  <!-- Pie de página agregar enlaces correspondientes -->
  <div class="footer">
        <!-- Sección de enlaces del pie de página -->
        <div class="footer-links">
            <!-- Enlaces de Servicios -->
            <div class="footer-section-service-title">
                <!-- Títulos -->
                <div class="footer-service-text">Servicios</div>
                <div class="footer-service-text">Ser Tutor</div>
                <div class="footer-service-text">Blog</div>
                <div class="footer-service-text">Legal</div>
            </div>

            <!--  Contenido Servicios -->
            <div class="footer-section-service-content">
                <!-- Contenidos de servicios -->
                <div class="footer-section-service-content-text">¿Que hacemos?</div>
                <div class="footer-section-service-content-text">¿Como Funcionan?</div>
                <div class="footer-section-service-content-text">Preguntas Frecuentes</div>
                <div class="footer-section-service-content-text">Recomendaciones</div>
                <div class="footer-section-service-content-text">Garantía</div>
            </div>

            <!-- Contenido Ser Tutor -->
            <div class="footer-section-tutor-content">
                <!-- Contenidos de ser tutor -->
                <div class="footer-section-tutor-content-text">Razones</div>
                <div class="footer-section-tutor-content-text">Ventajas</div>
                <div class="footer-section-tutor-content-text">Requisitos</div>
            </div>

            <!-- Contenido Blog -->
            <div class="footer-section-blog-content">
                <!-- Contenidos de ser blog -->
                <div class="footer-section-blog-content-text">Educacion</div>
                <div class="footer-section-blog-content-text">Tecnologias</div>
                <div class="footer-section-blog-content-text">Ciencias</div>
            </div>

            <!-- Contenido legal -->
            <div class="footer-section-legal-content">
                <!-- Contenidos de ser blog -->
                <div class="footer-section-legal-content-text">Aviso Legal</div>
                <div class="footer-section-legal-content-text">Politica de Privacidad</div>
                <div class="footer-section-legal-content-text">Politicas de Cookies</div>
            </div>

            <!-- Sección de Redes Sociales -->
            <div class="footer-social-bar">
                <!-- Separador vertical -->
                <div class="social-separator"></div>

                <!-- Iconos y enlaces de redes sociales -->
                <div class="footer-social-icon-container">
                    <div>
                    <!-- Facebook -->
                    <div class="footer-social-item">
                        <img class="footer-social-icon" src="{{ asset('img/facebook.svg') }}" alt="Facebook" />
                        <div class="footer-social-text">Facebook</div>
                    </div>
                    <!-- Twitter -->
                    <div class="footer-social-item">
                        <img class="footer-social-icon" src="{{ asset('img/twitter.svg') }}" alt="Twitter" />
                        <div class="footer-social-text">Twitter</div>
                    </div>
                    <!-- Instagram -->
                    <div class="footer-social-item">
                        <img class="footer-social-icon" src="{{ asset('img/instagram.svg') }}" alt="Instagram" />
                        <div class="footer-social-text">Instagram</div>
                    </div>
                    <!-- Youtube -->
                    <div class="footer-social-item">
                        <img class="footer-social-icon" src="{{ asset('img/youtube.svg') }}" alt="Youtube" />
                        <div class="footer-social-text">Youtube</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separador horizontal -->
        <div class="footer-horizontal-separator"></div>

        <!-- Texto de derechos de autor -->
        <div class="copyright-text">2023 NumerIQ - Todos los derechos reservados</div>

    </div>
    <!--Fin pie de pagina-->

    <!-- Script JavaScript para ocultar y mostrar tarjeta  -->
    <script defer>
        // Obtén referencias a los elementos relevantes
        const confirmacionPago = document.getElementById('confirmacionPago');

        // Función para ocultar la tarjeta de confirmación
        function ocultarConfirmacionPago() {
            confirmacionPago.style.display = 'none';
        }

        // Función para mostrar la tarjeta al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            confirmacionPago.style.display = 'block';
        });
    </script>


</body>
</html>
