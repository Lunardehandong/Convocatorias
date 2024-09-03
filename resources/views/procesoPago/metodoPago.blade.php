<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
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
    <div class="title">Seleccione un metodo de pago</div>

    <!-- Separador horizontal -->
    <div class="horizontal-separator"></div>
    
   <!-- Precio -->
   <div class="price-container">
        <div class="price-info">
            <div class="price-background"></div>
             <!-- Texto para el precio (Este texto debe ser dinámico y venir de la base de datos) -->
            <div class="total-price">MX$ 350</div>
            <div class="total-text">Total:</div>
        </div>
            <div class="payment-only-text">Por favor seleccione un metodo de pago</div>
        </a>
    </div>
    
</div>

   <!-- Método de pago Api PayPal -->
   <div class="payment-method-container">
    <div class="payment-method-content">
        <div class="payment-method-button-container">
            <div id="smart-button-container">
                <div class="text-center">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- agregar la logica correspondiente y ID correspondiente para hacer funcionar la api de paypal -->
    <script src="https://www.paypal.com/sdk/js?client-id=AQ0e4narL8BExRYm8_m0Mtri3QvPzHuXRnSvXCVXk9heoGhmnxFzj1H0mW2v2CGgyUtEbcw2mMpC5fyL&currency=USD" data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
        paypal.Buttons({
            style: {
            shape: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'pay',
            
            },
            //modificar valores 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"Traer descripcion desde back","amount":{"currency_code":"USD","value":13}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
        // redireccion
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
 
        actions.redirect('http://127.0.0.1:8000/confirmacionpago_page');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

 <!-- Pie de página agregar enlaces correspondienetes -->
    <!-- Include the navigation bar -->
    @include('layouts.footer')
    <!--Fin pie de pagina-->


<script>
        // Función para mostrar el formulario correspondiente
        function mostrarFormulario(metodoPago) {
            // Ocultar todos los formularios
            document.getElementById('formularioTarjeta').style.display = 'none';
            document.getElementById('formularioPayPal').style.display = 'none';

            // Mostrar el formulario seleccionado
            if (metodoPago === 'tarjeta') {
                document.getElementById('formularioTarjeta').style.display = 'block';
            } else if (metodoPago === 'paypal') {
                document.getElementById('formularioPayPal').style.display = 'block';
            }
        }
    </script>

</body>
</html>
