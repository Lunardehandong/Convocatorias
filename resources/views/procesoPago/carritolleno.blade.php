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

    <!-- Informacion curso -->
    <div class="course-info-container">
        <div class="course-info">

            <!-- Descripción del curso (Este texto debe ser dinámico y venir de la base de datos) -->
          
            <div class="course-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</div>
             <!-- Titulo del curso (Este texto debe ser dinámico y venir de la base de datos) -->
           
            <div class="course-title">Información del curso</div>
        </div>
    
        <!-- Botón "Eliminar" -->
        
        <div id="eliminarBtn" class="delete-button">Eliminar</div>
    </div>

    <!-- Tarjeta de confirmación de eliminación -->
    <div id="confirmacionEliminar" class="confirmation-card" style="display: none;">
        <!-- Mensaje de confirmación -->
        <div class="division1"></div>
        <div class="confirmation-message">¿Estás seguro que deseas eliminarlo?</div>
        <div class="division2"></div>
        <!-- Botones -->
        <div class="confirmation-buttons">
            <!-- Botón "Regresar" -->
            <div class="return-button-container">
                <div class="return-button-background"></div>
                <div class="return-button-border"></div>
                <div class="return-button-text" onclick="ocultarConfirmacionEliminar()">Regresar</div>
            </div>
            
            <!-- Botón Confirmar Eliminar -->
             <!--  (La funcionalidad de este botón debe ser implementada por el backend) -->
            <div class="delete-button-container">
                <div class="delete-button-background"></div>
                <div class="delete-button-border"></div>
                <div class="delete-button-text">Eliminar</div>
            </div>


        </div>
    </div>

    <!-- Precio -->
    <div class="price-container">
        <div class="price-info">
            <div class="price-background"></div>
             <!-- Texto para el precio (Este texto debe ser dinámico y venir de la base de datos) -->
            <div class="total-price">MX$ 350</div>
            <div class="total-text">Total:</div>
        </div>
        <a href="{{ url('carritometodo_page') }}">
            <div class="payment-button">Selecciona método de pago</div>
        </a>
    </div>
</div>


     <!-- Pie de página enlaces correspondienetes -->
<!-- Include the footer -->
    @include('layouts.footer')
    <!--Fin pie de pagina-->



<!-- Script JavaScript ocultar y aprecer tarjeta  -->
<script defer>
    // Obtén referencias a los elementos relevantes
    const eliminarBtn = document.getElementById('eliminarBtn');
    const confirmacionEliminar = document.getElementById('confirmacionEliminar');

    // Función para mostrar la tarjeta de confirmación
    function mostrarConfirmacionEliminar() {
        confirmacionEliminar.style.display = 'block';
    }

    // Función para ocultar la tarjeta de confirmación
    function ocultarConfirmacionEliminar() {
        confirmacionEliminar.style.display = 'none';
    }

    // Función para ocultar la tarjeta al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        ocultarConfirmacionEliminar();
    });

    // Agrega eventos a los botones
    eliminarBtn.addEventListener('click', mostrarConfirmacionEliminar);

</script>


</body>
</html>
