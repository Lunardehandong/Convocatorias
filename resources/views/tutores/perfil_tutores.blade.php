<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="assets/img/global.css" />
    <link rel="stylesheet" href="assets/img/tutores.css" />

            <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Maven Pro:wght@400;500;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap"
    />
  </head>
  <body>

        <!-- Include the navigation bar -->
    @include('layouts.navbar')

      <main class="preguntas-frecuentes">
        <div class="nuestros-tutores-wrapper">
          <h1 class="nuestros-tutores">Nuestros Tutores</h1>
        </div>
        //<img class="imagen-icon" alt="" src="./public/imagen.svg" />

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
    
        <div class="estadsticas">
          <div class="geometra">
            <input
              class="busca-algn-nombre"
              placeholder="Busca algún nombre o una materia. . ."
              type="text"
            />
            <img
              class="magnifying-glass-solid-1-icon"
              alt=""
            src="assets/img/buscar.png"
            />
          </div>
        </div>
        <section class="especializacin">
          <div class="perfiles">
            <div class="perfil">
              <div class="tutor">Tutor</div>
              <div class="perfil1">
                <div class="alejandro-fernndez-santos">
                  Alejandro Fernández Santos
                </div>
                <div class="text-parent">
                  <div class="text">
                    <img
                      class="img-icon"
                      loading="eager"
                      alt=""
                      src="assets/img/user.png"
                    />
                  </div>
                  <div class="preguntas-frecuentes1">
                    <div class="blog1">
                      <div class="legal">
                        <div class="opiniones">20 Opiniones</div>
                        <div class="container">
                          <img
                            class="cta-icon"
                            loading="eager"
                            alt=""
                            src="./public/cta@2x.png"
                          />

                          <img
                            class="envelope-solid-1-icon"
                            loading="eager"
                            alt=""
                            src="./public/envelopesolid-1.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="ver-mas-">Ver mas -&gt;</div>
                  </div>
                </div>
              </div>
            </div>
            <form class="especializacin1">
              <div class="especializacin2">Especialización</div>
              <div class="clase-x">
                <input
                  class="estadsticas1"
                  placeholder="Estadísticas"
                  type="text"
                />
              </div>
              <div class="clase-x1">
                <input class="geometra1" placeholder="Geometría" type="text" />
              </div>
              <div class="clase-x2">
                <input
                  class="teora-de-grafos"
                  placeholder="Teoría de Grafos"
                  type="text"
                />
              </div>
              <div class="clase-x3">
                <input
                  class="lgebra-lineal"
                  placeholder="Álgebra Lineal"
                  type="text"
                />
              </div>
              <button class="clase-x4">
                <div class="ecuaciones-diferenciales">
                  Ecuaciones Diferenciales
                </div>
              </button>
            </form>
            <div class="horarios">
              <div class="horarios1">Horarios</div>
              <div class="clase-x5">
                <div class="symbol">
                  <div class="lunes1">Lunes</div>
                  <div class="specialized-studies">16:50</div>
                </div>
                <div class="clase-examen-de">Clase Examen de Admisión</div>
              </div>
              <div class="clase-x6">
                <div class="clase-x-inner">
                  <div class="lunes-parent">
                    <div class="lunes2">Lunes</div>
                    <div class="clase-de-estadsticas">
                      Clase de Estadísticas
                    </div>
                  </div>
                </div>
                <div class="div">13:33</div>
              </div>
              <div class="clase-x7">
                <div class="clase-x-child">
                  <div class="jueves-parent">
                    <div class="jueves1">Jueves</div>
                    <div class="clase-de-algebra">Clase de Algebra II</div>
                  </div>
                </div>
                <div class="div1">12:30</div>
              </div>
            </div>
          </div>
        </section>
        <section class="servicios1">
          <div class="perfiles1">
            <div class="perfil2">
              <div class="tutor1">Tutor</div>
              <div class="perfil3">
                <div class="alejandro-fernndez-santos1">
                  Alejandro Fernández Santos
                </div>
                <div class="envelope">
                  <div class="text1">
                    <img
                      class="img-icon1"
                      loading="eager"
                      alt=""
                      src="assets/img/user.png"
                    />
                  </div>
                  <div class="classes">
                    <div class="clasex2">
                      <div class="estadsticas2">
                        <div class="opiniones1">20 Opiniones</div>
                        <div class="teorade-grafos">
                          <img
                            class="cta-icon1"
                            loading="eager"
                            alt=""
                            src="./public/cta@2x.png"
                          />

                          <img
                            class="envelope-solid-1-icon1"
                            loading="eager"
                            alt=""
                            src="./public/envelopesolid-1.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="ver-mas-1">Ver mas -&gt;</div>
                  </div>
                </div>
              </div>
            </div>
            <form class="especializacin3">
              <div class="especializacin4">Especialización</div>
              <div class="clase-x8">
                <input
                  class="estadsticas3"
                  placeholder="Estadísticas"
                  type="text"
                />
              </div>
              <div class="clase-x9">
                <input
                  class="estadsticas4"
                  placeholder="Estadísticas"
                  type="text"
                />
              </div>
              <div class="clase-x10">
                <input
                  class="estadsticas5"
                  placeholder="Estadísticas"
                  type="text"
                />
              </div>
              <div class="clase-x11">
                <input class="geometra2" placeholder="Geometría" type="text" />
              </div>
              <div class="clase-x12">
                <input
                  class="teora-de-grafos1"
                  placeholder="Teoría de Grafos"
                  type="text"
                />
              </div>
              <div class="clase-x13">
                <input
                  class="lgebra-lineal1"
                  placeholder="Álgebra Lineal"
                  type="text"
                />
              </div>
              <button class="clase-x14">
                <div class="ecuaciones-diferenciales1">
                  Ecuaciones Diferenciales
                </div>
              </button>
            </form>
            <div class="horarios2">
              <div class="horarios3">Horarios</div>
              <div class="clase-x15">
                <div class="blog2">
                  <div class="lunes3">Lunes</div>
                  <div class="frame-container">16:50</div>
                </div>
                <div class="clase-examen-de1">Clase Examen de Admisión</div>
              </div>
              <div class="clase-x16">
                <div class="frame-div">
                  <div class="lunes-group">
                    <div class="lunes4">Lunes</div>
                    <div class="clase-de-estadsticas1">
                      Clase de Estadísticas
                    </div>
                  </div>
                </div>
                <div class="div2">13:33</div>
              </div>
              <div class="clase-x17">
                <div class="clase-x-inner1">
                  <div class="jueves-group">
                    <div class="jueves2">Jueves</div>
                    <div class="clase-de-algebra1">Clase de Algebra II</div>
                  </div>
                </div>
                <div class="div3">12:30</div>
              </div>
            </div>
          </div>
        </section>
        <section class="c-t-a">
          <div class="perfiles2">
            <div class="perfil4">
              <div class="tutor2">Tutor</div>
              <div class="perfil5">
                <div class="alejandro-fernndez-santos2">
                  Alejandro Fernández Santos
                </div>
                <div class="geometra3">
                  <div class="teorade-grafos1">
                    <img
                      class="img-icon2"
                      loading="eager"
                      alt=""
                      src="assets/img/user.png"
                    />
                  </div>
                  <div class="horarios4">
                    <div class="clase1">
                      <div class="lunes5">
                        <div class="opiniones2">20 Opiniones</div>
                        <div class="cta-parent">
                          <img
                            class="cta-icon2"
                            loading="eager"
                            alt=""
                            src="./public/cta@2x.png"
                          />

                          <img
                            class="envelope-solid-1-icon2"
                            loading="eager"
                            alt=""
                            src="./public/envelopesolid-1.svg"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="ver-mas-2">Ver mas -&gt;</div>
                  </div>
                </div>
              </div>
            </div>
            <form class="especializacin5">
              <div class="especializacin6">Especialización</div>
              <div class="clase-x18">
                <input
                  class="estadsticas6"
                  placeholder="Estadísticas"
                  type="text"
                />
              </div>
              <div class="clase-x19">
                <input
                  class="teora-de-grafos2"
                  placeholder="Teoría de Grafos"
                  type="text"
                />
              </div>
              <div class="clase-x20">
                <input
                  class="lgebra-lineal2"
                  placeholder="Álgebra Lineal"
                  type="text"
                />
              </div>
              <button class="clase-x21">
                <div class="ecuaciones-diferenciales2">
                  Ecuaciones Diferenciales
                </div>
              </button>
            </form>
            <div class="horarios5">
              <div class="horarios6">Horarios</div>
              <div class="clase-x22">
                <div class="c-t-a1">
                  <div class="lunes6">Lunes</div>
                  <div class="horarios7">16:50</div>
                </div>
                <div class="clase-examen-de2">Clase Examen de Admisión</div>
              </div>
              <div class="clase-x23">
                <div class="lunes-container">
                  <div class="lunes7">Lunes</div>
                  <div class="div4">16:50</div>
                </div>
                <div class="clase-examen-de3">Clase Examen de Admisión</div>
              </div>
              <div class="clase-x24">
                <div class="clase-x-inner2">
                  <div class="lunes-parent1">
                    <div class="lunes8">Lunes</div>
                    <div class="clase-de-estadsticas2">
                      Clase de Estadísticas
                    </div>
                  </div>
                </div>
                <div class="div5">13:33</div>
              </div>
              <div class="clase-x25">
                <div class="clase-x-inner3">
                  <div class="jueves-container">
                    <div class="jueves3">Jueves</div>
                    <div class="clase-de-algebra2">Clase de Algebra II</div>
                  </div>
                </div>
                <div class="div6">12:30</div>
              </div>
            </div>
          </div>
        </section>
        <section class="perfiles3">
          <div class="perfil6">
            <div class="tutor3">Tutor</div>
            <div class="perfil7">
              <div class="alejandro-fernndez-santos3">
                Alejandro Fernández Santos
              </div>
              <div class="f-a-q">
                <div class="ser-tutor1">
                  <img
                    class="img-icon3"
                    loading="eager"
                    alt=""
                    src="assets/img/user.png"
                  />
                </div>
                <div class="numer-i-q">
                  <div class="stats-box">
                    <div class="opiniones-parent">
                      <div class="opiniones3">20 Opiniones</div>
                      <div class="cta-group">
                        <img
                          class="cta-icon3"
                          loading="eager"
                          alt=""
                          src="./public/cta@2x.png"
                        />

                        <img
                          class="envelope-solid-1-icon3"
                          loading="eager"
                          alt=""
                          src="./public/envelopesolid-1.svg"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="ver-mas-3">Ver mas -&gt;</div>
                </div>
              </div>
            </div>
          </div>
          <form class="especializacin7">
            <div class="especializacin8">Especialización</div>
            <div class="clase-x26">
              <input
                class="estadsticas7"
                placeholder="Estadísticas"
                type="text"
              />
            </div>
            <div class="clase-x27">
              <input class="geometra4" placeholder="Geometría" type="text" />
            </div>
            <div class="clase-x28">
              <input
                class="teora-de-grafos3"
                placeholder="Teoría de Grafos"
                type="text"
              />
            </div>
            <div class="clase-x29">
              <input
                class="lgebra-lineal3"
                placeholder="Álgebra Lineal"
                type="text"
              />
            </div>
            <button class="clase-x30">
              <div class="ecuaciones-diferenciales3">
                Ecuaciones Diferenciales
              </div>
            </button>
          </form>
          <div class="horarios8">
            <div class="horarios9">Horarios</div>
            <div class="clase-x31">
              <div class="lunes-frames-group">
                <div class="lunes9">Lunes</div>
                <div class="empty-frame">16:50</div>
              </div>
              <div class="clase-examen-de4">Clase Examen de Admisión</div>
            </div>
            <div class="clase-x32">
              <div class="clase-x-inner4">
                <div class="lunes-parent2">
                  <div class="lunes10">Lunes</div>
                  <div class="clase-de-estadsticas3">Clase de Estadísticas</div>
                </div>
              </div>
              <div class="div7">13:33</div>
            </div>
            <div class="clase-x33">
              <div class="clase-x-inner5">
                <div class="jueves-parent1">
                  <div class="jueves4">Jueves</div>
                  <div class="clase-de-algebra3">Clase de Algebra II</div>
                </div>
              </div>
              <div class="div8">12:30</div>
            </div>
          </div>
        </section>
      </main>
    <!-- Include the footer -->
    @include('layouts.footer')
  </body>
</html>
