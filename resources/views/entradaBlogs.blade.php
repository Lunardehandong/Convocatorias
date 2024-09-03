
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
    @include('layouts.navbar')


    <!-- Titulo-->
    <div class="blog-page-title">BLOG NumerIQ</div>


<!-- Entradas de blog -->
<div class="blog-entrada-container">
    <!-- Titulo -->
<div class="title-entrada-blog">10 Metodologías de aprendizaje</div>
<!-- Intro blog -->
<div class="container-intro-blog">
  <img src="https://via.placeholder.com/200" alt="Placeholder image">
  <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</div>
</div>
<!-- Contenido blog parte 1 -->
<div class="content-blog">
  <div class="content-blog-title">Método 1</div>
  <div class="content-blog-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
  <!-- Contenido blog parte 2 -->
  <div class="content-blog-title">Método 2</div>
  <div class="content-blog-text">
    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante.</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.</p>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus. Praesent ut odio sed dolor finibus tincidunt non non ligula. </div>
    </div>
</div><!-- Fin Contenido blog  -->



</div>
 <!-- Fin blogs -->


<!-- Barra lateral -->
<div class="sidebar-entrada">

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
