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

    
    <!-- Titulo-->
    <div class="blog-page-title">BLOG NumerIQ</div>

    <!-- Carrusel -->
    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="slide" style="background-color: #FF5733;"></div>
            <div class="slide" style="background-color: #FFC300;"></div>
            <div class="slide" style="background-color: #DAF7A6;"></div>
            <!-- Agrega más slides según sea necesario -->
        </div>
        <div class="carousel-controls">
            <div class="carousel-indicator"></div>
            <div class="carousel-indicator"></div>
            <div class="carousel-indicator"></div>
            <!-- Agrega más indicadores según sea necesario -->
        </div>
        <div class="carousel-control carousel-control-left">&#10094;</div>
        <div class="carousel-control carousel-control-right">&#10095;</div>
    </div>

        <!-- script para que se mueva -->
        <script>
            // Espera a que se cargue el contenido de la página
            document.addEventListener('DOMContentLoaded', function () {
                const carouselContainer = document.querySelector('.carousel-container');
                const carouselSlides = document.querySelectorAll('.slide');
                const carouselIndicators = document.querySelectorAll('.carousel-indicator');
                const carouselControlLeft = document.querySelector('.carousel-control-left');
                const carouselControlRight = document.querySelector('.carousel-control-right');

                // Índice de la diapositiva actual
                let currentIndex = 0;

                // Función para mostrar una diapositiva específica
                function showSlide(index) {
                    carouselSlides.forEach(function (slide, i) {
                        if (i === index) {
                            slide.style.display = 'block'; // Muestra la diapositiva
                        } else {
                            slide.style.display = 'none'; // Oculta las otras diapositivas
                        }
                    });
                    updateIndicators(index); // Actualiza los indicadores para reflejar la diapositiva actual
                }
                // Función para avanzar a la siguiente diapositiva
                function nextSlide() {
                    currentIndex = (currentIndex + 1) % carouselSlides.length;
                    showSlide(currentIndex);
                }
                // Función para avanzar a la diapositiva anterior
                function prevSlide() {
                    currentIndex = (currentIndex - 1 + carouselSlides.length) % carouselSlides.length;
                    showSlide(currentIndex);
                }

                // Función para actualizar los indicadores
                function updateIndicators(index) {
                    carouselIndicators.forEach(function (indicator, i) {
                        if (i === index) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }

                carouselControlLeft.addEventListener('click', prevSlide);
                carouselControlRight.addEventListener('click', nextSlide);

                // Muestra la primera diapositiva cuando se carga la página

                showSlide(currentIndex);
            });
        </script>
        
<!-- Entradas de blog -->
<div class="blog-container">
    <!-- Primera entrada de blog -->
    <div class="blog-entry">
        <div class="image-container">
            <img src="https://via.placeholder.com/150x150" alt="Imagen del primer blog">
        </div>
        <div class="blog-content">
            <h2 class="blog-title">Título del Primer Blog</h2>
            <p class="blog-description">Descripción del primer blog. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum nisi id molestie faucibus. </p>
            <a href="{{ url('/entradaBlogs') }}" class="read-more">Leer más</a>
        </div>
    </div>
    <!-- Segunda entrada de blog -->
    <div class="blog-entry">
        <div class="image-container">
            <img src="https://via.placeholder.com/150x150" alt="Imagen del segundo blog">
        </div>
        <div class="blog-content">
            <h2 class="blog-title">Título del Segundo Blog</h2>
            <p class="blog-description">Descripción del segundo blog.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum nisi id molestie faucibus. Donec egestas neque lacus, in molestie ipsum consectetur et. In aliquet purus ut lorem bibendum molestie.</p>
            <a href="{{ url('/entradaBlogs') }}" class="read-more">Leer más</a>
        </div>
    </div>
    <!-- Tercera entrada de blog -->
    <div class="blog-entry">
        <div class="image-container">
            <img src="https://via.placeholder.com/150x150" alt="Imagen del tercer blog">
        </div>
        <div class="blog-content">
            <h2 class="blog-title">Título del Tercer Blog</h2>
            <p class="blog-description">Descripción del tercer blog.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum nisi id molestie faucibus. Donec egestas neque lacus, in molestie ipsum consectetur et. In aliquet purus ut lorem bibendum molestie.</p>
            <a href="{{ url('/entradaBlogs') }}" class="read-more">Leer más</a>
        </div>
    </div>
    <!-- Cuarta entrada de blog -->
    <div class="blog-entry">
        <div class="image-container">
            <img src="https://via.placeholder.com/150x150" alt="Imagen del cuarto blog">
        </div>
        <div class="blog-content">
            <h2 class="blog-title">Título del Cuarto Blog</h2>
            <p class="blog-description">Descripción del cuarto blog. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum nisi id molestie faucibus. </p>
            <a href="{{ url('/entradaBlogs') }}" class="read-more">Leer más</a>
        </div>
    </div>
</div>
 <!-- Fin blogs -->


<!-- Barra lateral -->
<div class="sidebar">

    <div class="popular-entries">
        <h2 class="sidebar-title">Entradas Populares</h2>

        <!-- Entrada popular 1 -->
        <div class="popular-entry">
            <div class="popular-image">
                <img src="https://via.placeholder.com/100" alt="Imagen de entrada popular">
            </div>
            <div class="popular-content">
                <h3 class="popular-title">Título  1</h3>
                
            </div>
        </div>
        <!-- Entrada popular 2 -->
        <div class="popular-entry">
            <div class="popular-image">
                <img src="https://via.placeholder.com/100" alt="Imagen de entrada popular">
            </div>
            <div class="popular-content">
                <h3 class="popular-title">Título  2</h3>
               
            </div>
        </div>
        <!-- Entrada popular 3 -->
        <div class="popular-entry">
            <div class="popular-image">
                <img src="https://via.placeholder.com/100" alt="Imagen de entrada popular">
            </div>
            <div class="popular-content">
                <h3 class="popular-title">Título 3</h3>
                
            </div>
        </div>
    </div>
     <!-- Fin entradas populares -->

      <!-- Categorías -->
    <div class="category-container">
        <div class="category-title">Categorías</div>
        <div class="category-item">Categoría 1 </div>
        <div class="category-item">Categoría 2 </div>
        <div class="category-item">Categoría 3 </div>
        <div class="category-item">Categoría 4 </div>
    </div><!-- Fin Categorías -->
    
    <div class="course-container">
    <div class="course-conteiner-title ">Cursos NumerIQ</div>
    <div class="course-reminder">No te olvides de visitar nuestros cursos</div>
    <div class="course-image">
        <img src="https://via.placeholder.com/200" alt="Imagen del curso">
    </div>
</div>
    


</div> <!-- Fin Barra lateral -->



 




  <!-- Pie de página agregar enlaces correspondientes -->
    @include('layouts.footer')
    <!--Fin pie de pagina-->

    

</body>
</html>
