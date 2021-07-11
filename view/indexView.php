<?php include_once 'public/header.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
      <div class="hero-container" data-aos="fade-in">
          <!-- <img src="public/img/alm_tucu_logo.jpg" width="250" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100"> -->
          <h1>Bienvenido al Almacén Tucurrique</h1>
          <!-- <h2>Elegant Bootstrap Template for Startups, Apps &amp; more...</h2> -->
          <a href="#get-started" class="btn-get-started scrollto">Iniciar</a>
          <!--
          <div class="btns">
              <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
              <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
              <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
          </div>
          -->
      </div>
  </section><!-- End Hero Section -->

  <!-- ======= Get Started Section ======= -->
  <section id="get-started" class="padd-section text-center">
    <div class="container" data-aos="fade-up">
      <div class="section-title text-center">
        <h2>Estos son los artículos más vistos</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <?php
          foreach ($vars['prods'] as $item) {
        ?>
            <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="feature-block">
                <img src="public/img/productos/<?php echo $item[3].$item[2] ?>" alt="img">
                <h4><?php echo $item[7] ?></h4>
                <p><?php echo $item[4] ?></p>
                <form action="?controlador=Productos&accion=mostrar" method="post">
                  <input type="hidden" name="id" value="<?php echo $item[0] ?>">
                  <input type="submit" name="" value="Ver más"style="border:0; outline:0"/>
                </form>
              </div>
            </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section><!-- End Get Started Section -->

    <!-- ======= Features Section ======= -->
    <?php if (count($vars['ofers']) > 0) { ?>
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Algunas de nuestras ofertas</h2>
        </div>
      </div>
        <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <?php
          foreach ($vars['ofers'] as $item) {
           ?>
           <div class="col-md-6 col-lg-4">
             <div class="feature-block">
               <img src="public/img/productos/<?php echo $item[6].$item[5] ?>" alt="img">
               <h4><?php echo $item[10] ?></h4>
               <?php if($item[9] == 0) {?>
                 <p>-<?php echo $item[2]; ?>% Desde: <?php echo $item[1]; ?></p>
               <?php }else{ ?>
                 <p>-<?php echo $item[2]; ?>% ¡Ahora!</p>
               <?php } ?>
               <form action="?controlador=Productos&accion=mostrar" method="post">
                 <input type="hidden" name="id" value="<?php echo $item[3] ?>">
                 <input type="submit" name="" value="Ver más"style="border:0; outline:0"/>
               </form>
             </div>
           </div>
           <?php
          }
           ?>
        </div>
      </div>
    </section><!-- End Features Section -->
    <?php } ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contáctenos</h2>
          <!--<p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-6 col-md-5">
            <div class="row justify-content-center info">
              <div class="col-6" style="margin-right: 1em;">
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="col-6 email" style="margin-right: 1em;">
                <i class="bi bi-envelope"></i>
                <p>almacentucurrique@gmail.com</p>
              </div>

              <div class="col-6" style="margin-right: 1em;">
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="row justify-content-center social-links">
              <div class="col-6">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

<?php include_once 'public/footer.php'; ?>
