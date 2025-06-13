<?php include_once "config.php"; ?>

<nav class="navbar navbar-expand-lg px-3 nav-underline-animated">

 <!-- padding horizontal -->
  <a class="navbar-brand ms-2" href="#home"> <!-- margen izquierdo -->
    <img src="assets/img/logo/logo.png" alt="Logo" />
  </a>
  <button class="navbar-toggler me-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse sub-menu-bar shadow-mobile-menu" id="navbarSupportedContent2">
    <ul id="nav2" class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="page-scroll active" href="#home">Inicio</a>
      </li>
      <!-- hr class="nomostrar mobile-menu-divider d-block d-lg-none" -->

   <?php if ($show_presentacion): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#presentacion">Presentación</a>
        </li>
        <!--hr class="mobile-menu-divider d-block d-lg-none" -->
      <?php endif; ?>


      <?php if ($show_services): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#services">Características</a>
        </li>
        <!-- hr class="nomostrar mobile-menu-divider d-block d-lg-none" -->
      <?php endif; ?>

   

      <?php if ($show_about): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#about">Nosotros</a>
        </li>
        <!-- hr class="nomostrar mobile-menu-divider d-block d-lg-none" -->
      <?php endif; ?>


      <?php if ($show_pricing): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#pricing">Precios</a>
        </li>
        <hr class="nomostrar mobile-menu-divider d-block d-lg-none">
      <?php endif; ?>

      <?php if ($show_contact): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#contact">Contacto</a>
        </li>
        <hr class="nomostrar mobile-menu-divider d-block d-lg-none">
      <?php endif; ?>
    </ul>

    <a href="#0" class="nomostrar button button-sm radius-10 d-none d-lg-flex">MAS INFO</a>

  </div>
</nav>

<!-- Degradado blanco-transparente (sólo mobile) -->
<div class="nav-gradient-spacer d-block d-lg-none"></div> <!-- visible solo en mobile -->

