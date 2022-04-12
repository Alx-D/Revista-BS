<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="\Revista_BS_website\css\estilos.css">
  <link rel="stylesheet" href="\Revista_BS_website\css\all.min.css">
  <link rel="icon" type="image/png" href="\Revista_BS_website\imgs\Revista-BS-favicon.png">
  <meta name="description" content="Artículos sobre el cuidado de la salud y prevención de enfermedades">
  <meta name="keywords"
    content="salud, saludable, vida, cuidado, bienestar, prevención, enfermedades, nutrición, psicología, niños, familia, adultos mayores, sonora">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <!-- <script src="https://kit.fontawesome.com/7c1b686291.js" crossorigin="anonymous"></script> -->
  <title>Revista BS | Salud para vivir con sentido</title>
</head>

<body>
<header class="contenedor">

<!-- HEADER MOBILE -->
<div class="header-mobile-cont">

  <div class="header-mobile-row-1">
    <i class="fas fa-bars" onclick="showMenu()"></i>

    <div class="logo-mobile-bx">
      <a href="index.php">
        <img src="/Revista_BS_website/imgs/Revista-BS-logo-m.png">
      </a>
    </div>

    <i class="fas fa-search"></i>
  </div>

  <div class="lema-mobile-bx">
    <img src="/Revista_BS_website/imgs/lema.png">
  </div>

  <nav>
    <div class="menu-mobile" id="menu-enlaces">
      <i class="fas fa-times" onclick="hideMenu()"></i>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Revista</a></li>
        <li><a href="alianzas.html">Doctores colaboradores</a></li>
        <li><a href="#">Artículos por especialidad médica</a></li>
        <li><a href="\Revista_BS_website\enlaces.php">Contacto</a></li>
      </ul>
    </div>
  </nav>
</div>

<!-- HEADER DESKTOP -->
<div class="header-cont">

  <div class="header-col-izq" style="position: relative;">
    <div class="revista-bs-logo-bx">
      <a href="/Revista_BS_website/index.php">
        <img src="\Revista_BS_website\imgs\Revista-BS-logo-header.png" alt="Revista BS">
      </a>
    </div>
  </div>

  <div class="header-col-der">
    <div class="header-row-1">
      <div class="facebook">
        <a class="f1" href="https://www.facebook.com/RevistaBS" target="_blank">
          <i class="fab fa-facebook fa-lg"></i> Revista BS
        </a>
      </div>
      <p class="f2 femeson-leyenda">Órgano de vinculación y divulgación de <br> la Federación Médica de Sonora</p>
      <div class="femeson-logo-bx">
        <img src="/Revista_BS_website/imgs/femeson-escudo.png" alt="">
      </div>
    </div>

    <div class="header-row-2">
      <div class="lema-bx">
        <img src="/Revista_BS_website/imgs/lema.png">
      </div>
      <div id="buscador">
        <form>
          <input type="text" placeholder="Buscar">
        </form>
      </div>
    </div>

    <nav>
      <div class="menu-desktop">
        <ul>
          <li><a class="hv-txt-01" href="#">Inicio</a></li>
          <li><a class="hv-txt-01" href="ediciones/2022/01/Revista-BS-260.pdf" target="blank">Revista</a></li>
          <li><a class="hv-txt-01" href="alianzas.html">Doctores colaboradores</a></li>
          <li><a class="hv-txt-01" href="#">Artículos por especialidad médica</a></li>
          <li><a class="hv-txt-01" href="enlaces.php">Contacto</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="clear"></div>
</div>
</header>