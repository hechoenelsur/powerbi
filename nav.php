<?php include_once "config.php"; ?>

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#home">
    <img src="assets/img/logo/logo.png" alt="Logo" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
    <span class="toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
    <ul id="nav2" class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="page-scroll active" href="#home">Inicio</a>
      </li>
      <?php if ($show_services): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#services">Características</a>
        </li>
      <?php endif; ?>

        <?php if ($show_presentacion): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#presentacion">Presentación</a>
        </li>
      <?php endif; ?>

      <?php if ($show_about): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#about">Nosotros</a>
        </li>
      <?php endif; ?>
      <?php if ($show_pricing): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#pricing">Precios</a>
        </li>
      <?php endif; ?>
      <?php if ($show_contact): ?>
        <li class="nav-item">
          <a class="page-scroll" href="#contact">Contacto</a>
        </li>
      <?php endif; ?>
    </ul>
    <a href="#0" class="nomostrar button button-sm radius-10 d-none d-lg-flex">MAS INFO</a>
  </div>
</nav>
