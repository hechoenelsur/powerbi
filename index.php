<!DOCTYPE html>
<?php include_once "config.php"; ?>

<?php include_once "header.php" ?>

    <section id="home" class="hero-section-wrapper-2">

      <header class="header header-2">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">

              <div class="col-lg-12">
                <!-- NAV -->
                <?php include_once "nav.php" ?>
                <!-- navbar -->
              </div>

            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>

      <?php if ($show_hero) include "hero.php"; ?>


    </section>

    <?php if ($show_services) include "services.php"; ?>

    <!-- ?php if ($show_hero) include "youtube.php"; ? -->

    <?php if ($show_about) include "about.php"; ?>

    <!-- ?php if ($show_banner1) include "banner.php"; ? -->

     <?php if ($show_presentacion) include "presentacion.php"; ?>

    <!-- ?php if ($show_pricing) include "pricing.php"; ? -->

		<?php if ($show_team) include "team.php"; ?>

    <?php if ($show_banner2) include "banner.php"; ?>


    <?php if ($show_contact) include "contact.php"; ?>

    <?php if ($show_clients) include "clients.php"; ?>


    <?php include_once "footer.php" ?>
		
  </body>
</html>
