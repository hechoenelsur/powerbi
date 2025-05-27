<?php
$version_info = json_decode(file_get_contents("version.json"), true);
$version = $version_info['version'] ?? 'v0.0.0';
$build = $version_info['build'] ?? '';
?>

  <?php include_once "config.php"; ?>

<footer class="footer footer-style-1">
  <div class="container">
    <div class="widget-wrapper">
      <div class="row">

        <!-- LOGO + DESCRIPCIÓN + REDES -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".2s">
            <div class="logo">
              <a href="#home"><img src="assets/img/logo/logo.png" alt="Logo Hecho en el Sur"></a>
            </div>
            <p class="desc">
              Implementá soluciones con Microsoft Power BI y transformá tus datos en decisiones inteligentes.
              Conectá múltiples fuentes, automatizá reportes y visualizá el rendimiento de tu negocio en tiempo real.
            </p>
            <ul class="socials">
              <li><a href="#0"><i class="lni lni-facebook-filled"></i></a></li>
              <li><a href="#0"><i class="lni lni-twitter-filled"></i></a></li>
              <li><a href="#0"><i class="lni lni-instagram-filled"></i></a></li>
              <li><a href="#0"><i class="lni lni-linkedin-original"></i></a></li>
            </ul>
          </div>
        </div>

        <!-- MENÚ DINÁMICO BASADO EN CONFIG -->
        <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6 col-sm-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".3s">
            <h6>Secciones</h6>
            <ul class="links">
              <li><a href="#home">Inicio</a></li>
              <?php if ($show_services): ?><li><a href="#services">Características</a></li><?php endif; ?>
              <?php if ($show_about): ?><li><a href="#about">Nosotros</a></li><?php endif; ?>
              <?php if ($show_pricing): ?><li><a href="#pricing">Precios</a></li><?php endif; ?>
              <?php if ($show_contact): ?><li><a href="#contact">Contacto</a></li><?php endif; ?>
            </ul>
          </div>
        </div>

        <!-- BLOQUE DE SERVICIOS (se puede mantener o eliminar si querés usar otro contenido) -->
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
          <div class="footer-widget wow fadeInUp" data-wow-delay=".4s">
            <h6>Servicios</h6>
            <ul class="links">
              <li><a href="#services">Dashboards</a></li>
              <li><a href="#services">Reportes Automáticos</a></li>
              <li><a href="#services">Conexión de Datos</a></li>
              <li><a href="#services">Análisis de Indicadores</a></li>
            </ul>
          </div>
        </div>

        <!-- BLOQUE DE SOPORTE -->
<div class="col-xl-3 col-lg-3 col-md-6">
  <div class="footer-widget wow fadeInUp" data-wow-delay=".5s">
    <h6>Contacto</h6>
    <ul class="links">
      <li><strong>Dirección:</strong> 8 de Octubre 504 – Salto</li>
      <li><a href="tel:+59847339428">SALTO: +598 473 39428</a></li>
      <li><a href="tel:+59899540150">MONTEVIDEO: +598 99 540 150</a></li>
      <li><a href="mailto:sebastian@estudioochoa.uy">sebastian@estudioochoa.uy</a></li>
      <li><a href="mailto:administracion@estudioochoa.uy">administracion@estudioochoa.uy</a></li>
    </ul>
  </div>
</div>


      </div>
    </div>
  </div>



<div class="copyright-wrapper wow fadeInUp" data-wow-delay=".2s">
  <p class="text-center text-sm-start">
    Desarrollado por <strong><a href="https://hechoenelsur.uy" target="_blank">Hecho en el Sur</a></strong>
    <br>
    <a href="tel:099227422" class="d-block d-sm-inline">UY +598 99 22 74 22</a>
    <span class="d-none d-sm-inline"> | </span>
    <a href="tel:+5491165992808" class="d-block d-sm-inline">AR +54911 6599 2808</a>
    <span class="d-none d-sm-inline"> | </span>
    <a href="tel:+555599970819" class="d-block d-sm-inline">BR +55 55 9997-0819</a>
    <br>
    <small>Versión <?= $version; ?> – <?= $build; ?></small>
  </p>
</div>


      </div>
    </footer>
    <!-- ========================= footer style-1 end ========================= -->

    <!-- ========================= scroll-top start ========================= -->
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a>
    <!-- ========================= scroll-top end ========================= -->
		

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>