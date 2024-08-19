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
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible:wght@400;700&display=swap");

    /* Root CSS */
    :root {
      --light-background: #f6f7f9;
      --border-radius: 48px;
      --border-radius-mobile: 24px;
      --cs-color: #ff6433;
      --primary-text: #383838;
      --secondary-text: #606060;
      --dominant-color: #f6f7f9;
      --transition: all 0.3s ease;
    }

    /* Reset CSS */
    * {
      min-width: 0;
      font: inherit;
      margin: 0;
      padding: 0;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    img,
    video,
    svg {
      display: block;
      height: auto;
      max-width: 100%;
    }

    body {
      margin: 0;
      min-height: 100dvh;
      padding-bottom: 100px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      text-wrap: balance;
      color: var(--primary-text);
      font-size: 48px;
      font-weight: bold;
    }

    @media screen and (max-width: 768px) {

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: 32px;
      }
    }

    p {
      text-wrap: pretty;
    }

    /* Custom CSS */
    a {
      transition: all 0.3s ease;
    }

    html {
      font-family: "Atkinson Hyperlegible", Sans-serif;
      background-color: var(--light-background);
      color: var(--secondary-text);
      font-size: 18px;
      line-height: 1.5;
      scroll-behavior: smooth;
    }

    h2 {
      margin-bottom: 20px;
    }

    .banner {
      -o-object-fit: cover;
      object-fit: cover;
      width: 100%;
      height: 50vh;
      filter: drop-shadow(0 0 3em var(--dominant-color));
    }

    @media screen and (max-width: 1240px) {
      .banner {
        border-radius: 0 0 24px 24px;
      }
    }

    .container {
      background-color: white;
      min-height: 150px;
      border-radius: var(--border-radius);
      padding: 32px;
    }

    .back-button {
      position: absolute;
      left: 20px;
      top: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
      color: white;
      background-color: rgba(0, 0, 0, 0.3137254902);
      padding: 10px;
      border-radius: var(--border-radius-mobile);
      transition: var(--transition);
    }

    .back-button:hover {
      background-color: rgba(0, 0, 0, 0.5019607843);
    }

    .back-button .bi {
      font-size: 32px;
    }

    .slick-slide {
      margin-left: 27px;
    }

    /* the parent */
    .slider {
      margin-left: -27px;
    }

    .clase-card {
      display: grid;
      gap: 10px;
      border-radius: 24px;
      overflow: hidden;
      background-color: var(--light-background);
      cursor: grabbing;
    }

    .clase-card div {
      padding: 15px;
    }

    .clase-card div h3 {
      font-size: 36px;
    }

    .clase-card div a {
      width: 100%;
      margin-top: 3%;
      height: 60px;
      background: var(--cs-color);
      border-radius: 10px;
      font-style: normal;
      font-weight: 700;
      font-size: 20px;
      line-height: 25px;
      text-align: center;
      color: #fff;
      display: flex;
      align-items: center;
      place-content: space-evenly;
      text-decoration: none;
    }

    .clase-card div a:hover {
      color: var(--cs-color);
      background-color: white;
      border: solid 1px var(--cs-color);
    }

    .company-intro {
      display: flex;
      gap: 20px;
      padding: 20px 40px;
      max-width: 1200px;
      margin: 0 auto;
      transform: translateY(-50%);
      align-items: center;
      justify-content: space-between;
    }

    .company-intro .company-info {
      display: flex;
      gap: 20px;
    }

    @media screen and (max-width: 600px) {
      .company-intro .company-info {
        display: grid;
        text-align: center;
        justify-content: center;
      }
    }

    .company-intro .logo {
      max-width: 150px;
      border-radius: var(--border-radius);
      -o-object-fit: cover;
      object-fit: cover;
    }

    @media screen and (max-width: 600px) {
      .company-intro .logo {
        display: grid;
        text-align: center;
        justify-content: center;
        margin: auto;
      }
    }

    .company-intro #contact-mobile {
      display: none;
    }

    .company-intro ul {
      display: grid;
      list-style: none;
      gap: 10px;
    }

    .company-intro ul a {
      text-decoration: none;
      color: var(--primary-text);
    }

    .company-intro ul a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 600px) {
      .company-intro ul {
        justify-content: center;
      }
    }

    @media screen and (max-width: 1100px) {
      .company-intro {
        display: grid;
        align-items: center;
        justify-content: center;
        gap: 10px;
      }

      .company-intro #contact-desktop {
        display: none;
      }

      .company-intro #contact-mobile {
        display: flex;
        gap: 20px;
        margin: 20px auto 0 auto;
        flex-wrap: wrap;
      }
    }

    @media screen and (max-width: 1240px) {
      .company-intro {
        margin: 0 20px;
      }
    }

    @media screen and (max-width: 768px) {
      .company-intro .logo {
        max-width: 100px;
        border-radius: var(--border-radius-mobile);
      }
    }

    .company-intro span {
      font-size: 24px;
      font-weight: 400;
    }

    @media screen and (max-width: 768px) {
      .company-intro span {
        font-size: 20px;
      }
    }

    .company-wrapper {
      display: grid;
      grid-template-columns: 1fr 3fr;
      max-width: 1200px;
      padding: 20px;
      margin: 0 auto;
      gap: 20px;
    }

    @media screen and (max-width: 1100px) {
      .company-wrapper {
        grid-template-columns: 1fr;
      }
    }

    .company-wrapper .info-wrapper {
      display: grid;
      gap: 20px;
    }

    .company-wrapper .info-wrapper .about-container {
      display: grid;
    }

    .company-wrapper .info-wrapper .gallery-container .gallery-item {
      overflow: hidden;
      border-radius: var(--border-radius-mobile);
    }

    .company-wrapper .info-wrapper .gallery-container .gallery-item .gallery-image {
      -o-object-fit: cover;
      object-fit: cover;
      width: 100%;
      height: 100%;
      transition: var(--transition);
    }

    .company-wrapper .info-wrapper .gallery-container .gallery-item .gallery-image:hover {
      opacity: 0.7;
      cursor: pointer;
      transform: scale(1.1);
    }

    .company-wrapper .navigation-container {
      height: 100%;
    }

    .company-wrapper .navigation-container .navigation-sticky {
      position: sticky;
      top: 32px;
    }

    .company-wrapper .navigation-container .navigation-sticky ul {
      display: grid;
      list-style: disc;
      margin-left: 16px;
      gap: 20px;
      margin-top: 16px;
    }

    .company-wrapper .navigation-container .navigation-sticky ul a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 1100px) {
      .company-wrapper .navigation-container .navigation-sticky ul {
        grid-template-columns: 1fr 1fr 1fr;
      }
    }

    @media screen and (max-width: 768px) {
      .company-wrapper .navigation-container .navigation-sticky ul {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media screen and (max-width: 600px) {
      .company-wrapper .navigation-container .navigation-sticky ul {
        grid-template-columns: 1fr;
      }
    }

    .company-wrapper .navigation-container .navigation-sticky ul a {
      text-decoration: none;
      color: var(--secondary-text);
      transition: var(--transition);
    }

    .company-wrapper .navigation-container .navigation-sticky ul a:hover {
      color: var(--primary-text);
    }

    @media screen and (max-width: 1100px) {
      .company-wrapper .navigation-container .navigation-sticky {
        position: inherit;
      }
    }

    #mentoria a {
      width: 100%;
      margin-top: 3%;
      height: 60px;
      background: var(--cs-color);
      border-radius: 10px;
      font-style: normal;
      font-weight: 700;
      font-size: 20px;
      line-height: 25px;
      text-align: center;
      color: #fff;
      display: flex;
      align-items: center;
      place-content: space-evenly;
      text-decoration: none;
    }

    #mentoria a:hover {
      color: var(--cs-color);
      background-color: white;
      border: solid 1px var(--cs-color);
    }

    .exito-item {
      border-radius: var(--border-radius-mobile);
      overflow: hidden;
    }

    iframe {
      border-radius: var(--border-radius-mobile);
    }

    /*# sourceMappingURL=styles.css.map */
  </style>
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const img = document.querySelector('.banner');
      const colorThief = new ColorThief();

      img.addEventListener('load', function() {
        // Obtén el color predominante
        const dominantColor = colorThief.getColor(img);
        const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

        // Define la variable CSS en :root
        document.documentElement.style.setProperty('--dominant-color', colorString);
      });

      // Si la imagen ya está cargada (por ejemplo, si no es la primera vez que se accede a la página)
      if (img.complete) {
        const dominantColor = colorThief.getColor(img);
        const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

        document.documentElement.style.setProperty('--dominant-color', colorString);
      }
    });
  </script>
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