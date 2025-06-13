<!DOCTYPE html>
<?php include_once "config.php"; ?>

<?php include_once "header.php" ?>

<section id="home" class="hero-section-wrapper-2">

  <header class="header header-2">
    <div class="navbar-area">

      <!-- NAVBAR A FULL WIDTH -->
      <?php include_once "nav.php" ?>

      <!-- CONTENEDOR RESTO DE HEADER -->
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <!-- Aquí antes estaba el nav, ya no es necesario -->
          </div>
        </div>
      </div>

    </div>
  </header>

  <?php if ($show_hero) include "hero.php"; ?>

</section>
<hr class="mobile-menu-divider d-block d-lg-none">

<?php if ($show_presentacion) include "presentacion.php"; ?>


<?php if ($show_services) include "services.php"; ?>

<!-- ?php if ($show_hero) include "youtube.php"; ? -->

<?php if ($show_about) include "about.php"; ?>

<!-- ?php if ($show_banner1) include "banner.php"; ? -->

<!-- ?php if ($show_pricing) include "pricing.php"; ? -->

<?php if ($show_team) include "team.php"; ?>

<?php if ($show_banner2) include "banner.php"; ?>

<?php if ($show_contact) include "contact.php"; ?>

<?php if ($show_clients) include "clients.php"; ?>

<?php include_once "footer.php" ?>

</body>
</html>
