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

    <!-- Include the navigation bar -->
    @include('layouts.navbar')

 <!-- Fin contendeor principal -->


        <!-- Contenido principal -->
        <div class="main-content">
            <!-- Título "Carrito de compras" -->
            <div class="title">Carrito de compras</div>

            <!-- Separador horizontal -->
            <div class="horizontal-separator"></div>

            <!-- Contenedor de imagen y texto -->
            <div class="empty-cart-container">
                <!-- Imagen del carrito vacio -->
                <img src="assets/img/carro-vacio.png" alt="Tu carrito está vacío." />
                <!-- Texto "Tu carrito está vacío. Por favor, agregue productos." -->
                <p>Tu carrito está vacío. Por favor, agregue productos.</p>

                <!-- Campo de código de pago, agregar la logica correspondiente -->
                <div class="payment-code-container">
                   
                    <div class="code-input">
                        <input type="text" />
                    </div>
                    <div class="invalid-code-message">Ingrese un código de pago válido.</div>
                </div>

                <!-- Botones SVG -->
                <div class="button-container">
                    <!-- Botón -->
                    <a href="{{ url('/carritolleno_page') }}">
                        <svg width="100" height="50" style="cursor: pointer;">
                            <image href="assets/img/botonA.svg" width="100%" height="100%" />
                            <!-- Texto "Enviar" en medio del botón -->
                            <text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" fill="white" font-size="14">
                                Enviar
                            </text>
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Pie de página enlaces correspondienetes -->
<!-- Include the footer -->
    @include('layouts.footer')
    <!--Fin pie de pagina-->

</body>
</html>
