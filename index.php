<?php
$companyName = 'Data4Sales';
$companyLogo = './assets/logo.jpg';
$companyBanner = './assets/cover.jpeg';
$companyItem = 'plataforma de análisis y ejecución de Marketing predictivo';
$companyDescription = "
La plataforma procesa toda la información transaccional que se genera en un negocio (first-party data) y los ayuda a comprender mejor a los consumidores, impulsar la retención, el desarrollo y la recompra para volverlos más rentables. <br><br>

Al analizar los perfiles de los clientes, los patrones de compra y las predicciones de IA, las empresas pueden obtener conocimientos valiosos y accionar sobre los mismos en distintos canales de marketing como Meta (Instagram, Facebook), Google Ads, Email Marketing, WhatsApp Marketing, entre otros.<br><br>

Los equipos de marketing pueden llevar el targeting personalizado al siguiente nivel, entregando lo que los clientes necesitan, cuándo y dónde lo necesitan. La herramienta permite combinar automatizaciones con conocimiento del cliente y del negocio de forma simple y sin necesidad de tener equipos de ingenieros de datos ni conocimiento de analítica avanzada.";
$companyWebsite = 'https://www.data4sales.com/';
$companyFacebook = 'https://www.facebook.com/data4sales/';
$companyInstagram = 'https://www.instagram.com/data4saleslatam/';
$companyLinkedin = 'https://ar.linkedin.com/company/data4sales';
$companyGallery = [
  [
    'path' => './assets/1.png',
    'href' => 'https://www.youtube.com/watch?v=AgJJom9Ljyw'
  ],
  [
    'path' =>
    './assets/2.png',
    'href' => 'https://www.youtube.com/watch?v=Hj52CHZnLpo'
  ],
  [
    'path' =>
    './assets/3.png',
    'href' => 'https://www.youtube.com/watch?v=KoxMs7o1BWI'
  ],
  [
    'path' =>
    './assets/4.png',
    'href' => 'https://www.youtube.com/watch?v=7OA_Q4Q-oSs'
  ],
  [
    'path' =>
    './assets/5.png',
    'href' => 'https://www.youtube.com/watch?v=8znrtNSKJvw'
  ]
];
$companyClients = [
  [
    'path' => './assets/exito1.jpg',
    'href' => 'https://www.youtube.com/watch?v=AgJJom9Ljyw'
  ],
  [
    'path' =>
    './assets/exito2.jpg',
    'href' => 'https://www.youtube.com/watch?v=Hj52CHZnLpo'
  ],
  [
    'path' =>
    './assets/exito3.jpg',
    'href' => 'https://www.youtube.com/watch?v=KoxMs7o1BWI'
  ],
  [
    'path' =>
    './assets/exito4.jpg',
    'href' => 'https://www.youtube.com/watch?v=7OA_Q4Q-oSs'
  ],
  [
    'path' =>
    './assets/exito5.jpg',
    'href' => 'https://www.youtube.com/watch?v=8znrtNSKJvw'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $companyName ?></title>
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="./styles.css">
  <!-- Slider library -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
  <main>
    <!-- Hero -->
    <div>
      <!-- Banner -->
      <img class="banner" src="<?php echo $companyBanner ?>" alt="<php echo $companyName ?> banner">
      <a href="/red-de-aliados" class="back-button">
        <i class="bi bi-arrow-left-short"></i>
        Volver a Cursos
      </a>
      <!-- Logo and Company intro -->
      <div class="company-intro container">
        <div class="company-info">
          <img class="logo" src="<?php echo $companyLogo ?>" alt="<php echo $companyName ?> logo">
          <div>
            <h1><?php echo $companyName ?></h1>
            <span><?php echo $companyItem ?></span>
            <!-- Contact Links -->
            <ul class="contact-list" id="contact-mobile">
              <?php if (!empty($companyWebsite)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyWebsite); ?>" target="_blank">
                    <i class="bi bi-globe"></i>
                    <?php echo "Web"; ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyEmail)) : ?>
                <li>
                  <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>">
                    <i class="bi bi-envelope"></i>
                    <?php echo htmlspecialchars($companyEmail); ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyPhone)) : ?>
                <li>
                  <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>">
                    <i class="bi bi-telephone"></i>
                    <?php echo htmlspecialchars($companyPhone); ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyLinkedin)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyLinkedin); ?>" target="_blank">
                    <i class="bi bi-linkedin"></i>
                    <?php echo "Linkedin"; ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyPodcast)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyPodcast); ?>" target="_blank">
                    <i class="bi bi-mic-fill"></i>
                    <?php echo "Podcast"; ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyFacebook)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyFacebook); ?>" target="_blank">
                    <i class="bi bi-facebook"></i>
                    <?php echo "Facebook"; ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyTwitter)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyTwitter); ?>" target="_blank">
                    <i class="bi bi-twitter-x"></i>
                    <?php echo "Twitter"; ?>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (!empty($companyInstagram)) : ?>
                <li>
                  <a href="<?php echo htmlspecialchars($companyInstagram); ?>" target="_blank">
                    <i class="bi bi-instagram"></i>
                    <?php echo "Instagram"; ?>
                  </a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <!-- Contact Links -->
        <ul class="contact-list" id="contact-desktop">
          <?php if (!empty($companyWebsite)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyWebsite); ?>" target="_blank">
                <i class="bi bi-globe"></i>
                <?php echo "Web"; ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyEmail)) : ?>
            <li>
              <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>">
                <i class="bi bi-envelope"></i>
                <?php echo htmlspecialchars($companyEmail); ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyPhone)) : ?>
            <li>
              <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>">
                <i class="bi bi-telephone"></i>
                <?php echo htmlspecialchars($companyPhone); ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyLinkedin)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyLinkedin); ?>" target="_blank">
                <i class="bi bi-linkedin"></i>
                <?php echo "Linkedin"; ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyPodcast)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyPodcast); ?>" target="_blank">
                <i class="bi bi-mic-fill"></i>
                <?php echo "Podcast"; ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyFacebook)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyFacebook); ?>" target="_blank">
                <i class="bi bi-facebook"></i>
                <?php echo "Facebook"; ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyTwitter)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyTwitter); ?>" target="_blank">
                <i class="bi bi-twitter-x"></i>
                <?php echo "Twitter"; ?>
              </a>
            </li>
          <?php endif; ?>
          <?php if (!empty($companyInstagram)) : ?>
            <li>
              <a href="<?php echo htmlspecialchars($companyInstagram); ?>" target="_blank">
                <i class="bi bi-instagram"></i>
                <?php echo "Instagram"; ?>
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="company-wrapper">
      <!-- Contact-->
      <div class="navigation-container container">
        <div class="navigation-sticky">
          <h2>Índice</h2>
          <ul>
            <li><a href="#destacado">Contenido destacado</a></li>
            <li><a href="#sobre">Sobre <?php echo $companyName ?></a></li>
            <li><a href="#clases">Clases</a></li>
            <li><a href="#workshop">Workshop</a></li>
            <li><a href="#articulos">Artículos</a></li>
            <li><a href="#casos">Casos de éxito</a></li>
            <li><a href="#mentoria">Mentorías</a></li>
          </ul>
        </div>
      </div>
      <div class="info-wrapper">
        <!-- Gallery / Featured content -->
        <div class="container" id="destacado">
          <h2>Contenido destacado</h2>
          <div class="gallery-container slider">
            <?php foreach ($companyGallery as $e) : ?>
              <a href="<?php echo $e['href']; ?>" target="_blank" class="gallery-item">
                <img src="<?php echo $e['path']; ?>" class="gallery-image">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- About -->
        <div class="about-container container" id="sobre">
          <h2>Sobre <?php echo $companyName ?></h2>
          <p><?php echo $companyDescription ?></p>
        </div>
        <!-- Clases -->
        <div class="container" id="clases">
          <h2>Clases y capacitaciones</h2>
          <div class="slider">
            <div class="clase-card">
              <img src="./assets/clase.webp" alt="" srcset="">
              <div>
                <h3>Nombre Curso</h3>
                <p>Categoria</p>
                <a href="">Acceder</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/clase.webp" alt="" srcset="">
              <div>
                <h3>Nombre Curso</h3>
                <p>Categoria</p>
                <a href="">Acceder</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/clase.webp" alt="" srcset="">
              <div>
                <h3>Nombre Curso</h3>
                <p>Categoria</p>
                <a href="">Acceder</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/clase.webp" alt="" srcset="">
              <div>
                <h3>Nombre Curso</h3>
                <p>Categoria</p>
                <a href="">Acceder</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/clase.webp" alt="" srcset="">
              <div>
                <h3>Nombre Curso</h3>
                <p>Categoria</p>
                <a href="">Acceder</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Workshop -->
        <div class="container" id="workshop">
          <h2>Visita nuestro último Workshop</h2>
          <iframe width="100%" height="440" src="https://www.youtube-nocookie.com/embed/raFFOPu9uHA?si=ys2Q7qDS048PYkVl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <!-- Articulos -->
        <div class="container" id="articulos">
          <h2>Últimos articulos</h2>
          <div class="slider">
            <div class="clase-card">
              <img src="./assets/art1.png" alt="" srcset="">
              <div>
                <h3>Nombre Articulo</h3>
                <p>Marketing</p>
                <a href="">Visitar</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/art2.png" alt="" srcset="">
              <div>
                <h3>Nombre Articulo</h3>
                <p>Negocios</p>
                <a href="">Visitar</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/art1.png" alt="" srcset="">
              <div>
                <h3>Nombre Articulo</h3>
                <p>Categoria</p>
                <a href="">Visitar</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/art2.png" alt="" srcset="">
              <div>
                <h3>Nombre Articulo</h3>
                <p>Categoria</p>
                <a href="">Visitar</a>
              </div>
            </div>
            <div class="clase-card">
              <img src="./assets/art1.png" alt="" srcset="">
              <div>
                <h3>Nombre Articulo</h3>
                <p>Categoria</p>
                <a href="">Visitar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Casos de éxito -->
        <div class="container" id="casos">
          <h2>Casos de éxito</h2>
          <div class="slider">
            <?php foreach ($companyClients as $e) : ?>
              <a href="<?php echo $e['href']; ?>" target="_blank" class="exito-item">
                <img src="<?php echo $e['path']; ?>" class="exito-image">
              </a>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- Mentoria -->
        <div class="container" id="mentoria">
          <h2>Solicita una mentoría gratuita</h2>
          <p>Aprovecha esta llamada sin costo para recibir asesoría personalizada y descubrir cómo podemos ayudarte a alcanzar tus metas. ¡No te lo pierdas y agenda tu sesión hoy mismo!</p>
          <!-- Principio del widget de enlace de Calendly -->
          <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
          <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
          <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/bautistapietraroia/30min?hide_event_type_details=1&hide_gdpr_banner=1'});return false;">Agendar mentoría</a>
          <!-- Final del widget de enlace de Calendly -->
        </div>

      </div>
    </div>
  </main>
  <!-- Color Thief from banner -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
  <script src="./colorthief.js"></script>
  <!-- Slider -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $('.slider').slick({
      infinite: false,
      speed: 300,
      slidesToShow: 2,
      slidesToScroll: 2,
      arrows: false,
      responsive: [{
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  </script>
</body>

</html>