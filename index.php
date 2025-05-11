<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $evento = $_POST['evento'];
    $para = "brendablandocallorda@gmail.com"; // Cambialo por tu email
    $asunto = "Nueva reserva de firma";
    $mensaje = "Se ha reservado para el evento: $evento";

    mail($para, $asunto, $mensaje);

    echo "Reserva enviada por correo para: $evento";
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>María González - Escritora</title>
  <link rel="icon" href="icon/pngegg.png" type="icon" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Estilo personalizado -->
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Swiffy Slider -->
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>
<body>

  <header class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-dark container py-3">
      <a class="navbar-brand" href="#">María González</a>

      <!-- Botón hamburguesa -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Contenido del menú -->
      <div class="collapse navbar-collapse" id="menuPrincipal">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#inicio"><i class="bi bi-house-door-fill me-1"></i>Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#acerca">Acerca de</a></li>
          <li class="nav-item"><a class="nav-link" href="#libros">Libros</a></li>
          <li class="nav-item"><a class="nav-link" href="#prensa">Prensa</a></li>
          <li class="nav-item"><a class="nav-link" href="#firma">Firma de Libros</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          <li class="nav-item"><a class="nav-link" href="generos/generos.html">Géneros</a></li>
        </ul>
        <div class="d-flex gap-3">
  <form class="d-flex me-3" role="search" onsubmit="buscarLibros(event)">
    <input id="buscador" class="form-control me-2" type="search" placeholder="Buscar libros..." aria-label="Buscar">
    <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
  </form>
  <a href="login.html" class="text-white text-decoration-none" title="Iniciar sesión">
    <i class="bi bi-person-circle fs-4"></i>
  </a>
  <a href="carrito.php" class="text-white text-decoration-none position-relative" title="Carrito">
    <i class="bi bi-cart fs-4"></i>
  </a>
</div>
  </header>


  
<section id="carousel" class="py-5 bg-light">
  <div class="swiffy-slider slider-item-show3 slider-nav-visible slider-nav-outside slider-nav-round slider-indicators-dark slider-indicators-outside">
    <ul class="slider-container">
      
      <!-- Tarjeta 1 -->
      <li>
        <div class="card">
          <img src="imagen/carrusel/Disaster-is-Always-By-My-Side-2.jpg" class="card-img" alt="Disaster is Always By My Side">
          <div class="card-body">
            <h5 class="card-title">Disaster is Always By My Side</h5>
            <a href="detalle-libro.html">
            <button class="btn-ver-mas" >Ver más</button>
            </a>
          </div>
        </div>
      </li>

      <!-- Tarjeta 2 -->
      <li>
        <div class="card">
          <img src="imagen/carrusel/I-Abdicate-My-Title-of-Empress.jpg" class="card-img" alt="I Abdicate My Title of Empress">
          <div class="card-body">
            <h5 class="card-title">I Abdicate My Title of Empress</h5>
            <button class="btn-ver-mas">Ver más</button>
          </div>
        </div>
      </li>

      <!-- Tarjeta 3 -->
      <li>
        <div class="card">
          <img src="imagen/carrusel/Trapped-in-a-Soap-Opera.jpg" class="card-img" alt="Trapped in a Soap Opera">
          <div class="card-body">
            <h5 class="card-title">Trapped in a Soap Opera</h5>
            <button class="btn-ver-mas">Ver más</button>
          </div>
        </div>
      </li>

      <!-- Tarjeta 4 -->
      <li>
        <div class="card">
          <img src="imagen/carrusel/descarga (8).jpeg" class="card-img" alt="Libro misterioso 1">
          <div class="card-body">
            <h5 class="card-title">Libro Misterioso 1</h5>
            <button class="btn-ver-mas">Ver más</button>
          </div>
        </div>
      </li>

      <!-- Tarjeta 5 -->
      <li>
        <div class="card">
          <img src="imagen/carrusel/descarga (7).jpeg" class="card-img" alt="Libro misterioso 2">
          <div class="card-body">
            <h5 class="card-title">Libro Misterioso 2</h5>
            <button class="btn-ver-mas">Ver más</button>
          </div>
        </div>
      </li>

    </ul>

    <!-- Flechas -->
    <button type="button" class="slider-nav" aria-label="Anterior"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Siguiente"></button>

    <!-- Indicadores -->
    <div class="slider-indicators">
      <button class="active" aria-label="Slide 1"></button>
      <button aria-label="Slide 2"></button>
      <button aria-label="Slide 3"></button>
      <button aria-label="Slide 4"></button>
      <button aria-label="Slide 5"></button>
    </div>
  </div>
</section>


<section id="acerca" class="py-5">
    <div class="container d-flex align-items-center gap-4">
        <img src="imagen/perfil/DALL·E 2025-03-23 19.21.23 - Retrato de una chica llamada María Gonzales, escritora de webtoon de Argentina, con cabello negro y estilo aesthetic coreano. Lleva ropa de moda corea.webp" alt="María González" style="width: 200px; height: auto; border-radius: 10px;">
        <div>
            <h2>Acerca de María González</h2>
            <p class="descripcion">María González es una talentosa escritora argentina originaria de Monte Caseros, Corrientes...
            Reconocida como una de las mejores exponentes literarias de su generación, su obra abarca una amplia variedad de géneros, desde drama y fantasía hasta comedia, acción y
            romance. Su versatilidad le ha permitido explorar temáticas profundas de la vida cotidiana con un estilo conmovedor y auténtico.
            Además de su capacidad para crear historias impactantes en géneros como el suspenso,
            el terror y el paranormal, María ha sabido conectar con lectores jóvenes y adultos a 
            través de relatos de deportes y narrativa romántica. Su habilidad para combinar lo cotidiano con l
            o extraordinario le ha ganado el reconocimiento de críticos y lectores por igual.
            A lo largo de su carrera, ha sido galardonada como una de las mejores escritoras en su campo, destacándose 
            especialmente en la creación de personajes complejos y tramas cautivadoras. Su obra no solo refleja la riqueza cultural de su tierra natal, 
            sino que también toca temas universales que resuenan más allá de las fronteras.</p>
    </section>
</div>

<section id="libros" class="py-5 bg-light">
  <div class="container">
    <h2 class="mb-4">Catálogo de Libros</h2>
    <div class="catalogo-libros">
    <di class="tarjeta-libro">
    <div class="row g-4">

         <!-- Libro 1 -->
          
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="imagen/catalogo ejemplo/_Hottoite Kudasai, Juuma to Cheat Life Tanoshi Mitai!_ vol_ 1.jpeg" class="card-img-top" alt="Portada del libro">
                    <div class="card-body">
                        <h5 class="card-title">Hottoite Kudasai, Juuma to Cheat Life Tanoshi Mitai! vol. 1</h5>
                        <p class="card-text">Mizuki, una oficinista agotada por la rutina, despierta inesperadamente en un bosque desconocido… ¡y en el cuerpo de una niña pequeña!</p>
                        <p class="precio"><span class="precio-anterior">$1700</span> $3000</p>
                        <form action="carrito.php" method="post">
                            <input type="hidden" name="libro" value="Hottoite Kudasai">
                            <input type="hidden" name="precio" value="3000">
                            <button type="submit" class="btn btn-primary w-100">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>

        <!--libro 2-->


            <div class="col-md-4">
                <div class="card h-100">
                    <img src="imagen/catalogo ejemplo/Bai-lin & Li Yun.jpeg"  class="card-img-top" alt="Portada del libro">
                    <div class="card-body">
                        <h5 class="card-title">Bai-lin & Li Yun</h5>
                        <p class="card-text">El Dr. Li Yun investiga en el Ártico cuando se encuentra con una extraña criatura herida llamada Bailin.</p>
                        <p class="precio"><span class="precio-anterior">$1700</span> $3000</p>
                        <form action="carrito.php" method="post">
                            <input type="hidden" name="libro" value="Hottoite Kudasai">
                            <input type="hidden" name="precio" value="3000">
                            <button type="submit" class="btn btn-primary w-100">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>

                    <!--libro 6-->

                    <div class="col-md-4">
                <div class="card h-100">
            <img src="imagen/catalogo ejemplo/El Amarillo No Existe.jpeg"   class="card-img-top" alt="Portada del libro">
            <h3>El Amarillo No Existe</h3>
           <p class="card-text">primera novela ilustrada de Gema Vadillo: Amistad, amor, Berlín y... ¿viajes a través del espejo? Si ves una pintada en la pared que dice que mañana lloverá, probablemente ni la mires, pero ¿y si esa pintada predice tu futuro?</p>
            <p class="precio"><span class="precio-anterior">$1700</span> $3000</p>
                        <form action="carrito.php" method="post">
                            <input type="hidden" name="libro" value=" El Amarillo No Existe ">
                            <input type="hidden" name="precio" value="3000">
                            <button type="submit" class="btn btn-primary w-100">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>



<!-- Prensa -->
<section id="prensa" class="seccion-prensa py-5 bg-white">
  <div class="container">
    <h2 class="titulo-prensa">
      <img src="icon/press-release-icon-free-vector.jpg" alt="Ícono de prensa" class="icono-prensa">
      Prensa
    </h2>

    <p class="descripcion-prensa">
      Descubrí artículos, reseñas y entrevistas sobre la obra de María González, publicados en medios nacionales e internacionales.
    </p>

    <div class="row g-4 mt-4">

      <!-- Tarjeta 1 -->
      <div class="col-md-4">
        <div class="card h-100 sombra-prensa">
          <img src="icon/Clarín_logo.png" class="card-img-top" alt="Artículo Clarín">
          <div class="card-body">
            <h5 class="card-title"><strong>Clarín</strong></h5>
            <p class="card-text">"Una autora que renueva la literatura contemporánea". Una mirada profunda sobre sus obras.</p>
            <a href="Prensa/articulo-clarin.html" target="_blank" class="btn btn-outline-success">Leer artículo</a>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-4">
        <div class="card h-100 sombra-prensa">
          <img src="icon/La_Nacion_Logo.png" class="card-img-top" alt="Artículo La Nación">
          <div class="card-body">
            <h5 class="card-title"><strong>La Nación</strong></h5>
            <p class="card-text">Entrevista exclusiva con María González: su trayectoria, inspiración y visión futura.</p>
            <a href="Prensa/articulo-lanacion.html" target="_blank" class="btn btn-outline-success">Leer entrevista</a>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-4">
        <div class="card h-100 sombra-prensa">
          <img src="icon/images.png" class="card-img-top" alt="Artículo Revista Ñ">
          <div class="card-body">
            <h5 class="card-title"><strong>Revista Ñ</strong></h5>
            <p class="card-text">Exploramos la influencia de la cultura coreana en "Cherry Boy, That Girl" (체리보이그녀).</p>
            <a href="Prensa/articulo-revista.html" target="_blank" class="btn btn-outline-success">Ver reseña</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Firma de libros -->
<section id="firma" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4">Firma de Libros</h2>
        <p>Consulta los próximos eventos de firma de libros o reserva una cita personalizada.</p>
        
        <div class="row g-4 mt-3">
            
            <!-- Evento de Firma -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Evento de Firma - Feria del Libro de Monte Caseros, Corrientes</h5>
                        <p><strong>Fecha:</strong> 15 de abril, 2025<br>
                           <strong>Hora:</strong> 16:00 - 18:00 hs
                        </p>

                        <!-- Mapa -->
                        <div class="map-responsive mb-3">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27571.23221128114!2d-57.68356025218965!3d-30.254067478714674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95acd63c61c2e3b9%3A0x67cfd91e0cf03467!2sBiblioteca%20Popular%20Marcelino%20A.%20Elizondo!5e0!3m2!1sen!2sar!4v1746992441568!5m2!1sen!2sar" 
                                width="100%" 
                                height="300" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Ubicación del evento">
                            </iframe>
                        </div>

                        <!-- Botón Reservar -->
                        <button class="btn btn-success" onclick="reservarFirma('Feria del Libro de Corrientes')">Reservar</button>
                    </div>
                </div>
            </div>

            <!-- Firma Personalizada -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Firma Personalizada</h5>
                        <p>¿No puedes asistir a los eventos? Solicita una firma personalizada enviando un mensaje.</p>
                        <button class="btn btn-secondary" onclick="reservarFirma('Firma Personalizada')">Solicitar Firma</button>
                    </div>
                </div>
            </div>

        </div> <!-- Fin de la fila -->
    </div> <!-- Fin del contenedor -->
</section>

<!-- Contacto -->
<section id="contacto" class="py-5">
    <div class="container">
        <h2 class="mb-4">Contacto</h2>
        <form>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</section>



    <!-- Script para botón de reserva (opcional) -->
  <script>
    function reservarFirma(evento) {
      alert("Reservaste para: " + evento);
    }
  </script>

<!-- Bootstrap JS (requerido para el menú hamburguesa) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js" defer></script>

<script>
  function buscarLibros(event) {
    event.preventDefault();
    const termino = document.getElementById("buscador").value.toLowerCase();
    const tarjetas = document.querySelectorAll("#libros .card");

    tarjetas.forEach((tarjeta) => {
      const titulo = tarjeta.querySelector(".card-title").textContent.toLowerCase();
      tarjeta.parentElement.style.display = titulo.includes(termino) ? "block" : "none";
    });
  }
</script>

<!-- Footer -->
 
 <!-- Pie de página con estilo -->
 <footer>
  <div class="footer-section">
    <h3>Sobre la Autora</h3>
    <ul>
      <li><a href="#acerca">Biografía</a></li>
      <li><a href="#libros">Catálogo</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </div>

  <div class="footer-section">
    <h3>Redes Sociales</h3>
    <ul>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Twitter</a></li>
    </ul>
  </div>

  <div class="footer-section">
    <h3>Ayuda</h3>
    <ul>
      <li><a href="#">Preguntas frecuentes</a></li>
      <li><a href="#">Términos y condiciones</a></li>
      <li><a href="#">Política de privacidad</a></li>
    </ul>
  </div>

  <div class="footer-bottom">
    © 2025 María González — Todos los derechos reservados
  </div>
</footer>

</body>
</html>