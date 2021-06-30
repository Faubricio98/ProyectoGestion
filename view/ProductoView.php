<?php include_once 'public/header.php'; ?>
<section id="get-started" class="padd-section text-center">
  <section id="secProd" class="container shadow-lg p-3 mt-5 bg-white rounded" data-aos="fade-in">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-7">
        <img id="imgProd" height="auto" src="public/img/productos/<?php echo $vars['prods'][0][3].$vars['prods'][0][2]; ?>" style="max-width:300px" alt="img">
      </div>
      <div class="col-12 col-md-12 col-lg-5">
          <h1 class="text-success"><?php echo $vars['prods'][0][7]; ?></h1>
          <p><h5><?php echo $vars['prods'][0][4]; ?></h5></p>
          <div class="d-flex justify-content-around">
            <?php if($vars['prods'][0][6] == 1){ ?>
            <h3 class="text-primary"><s>Precio: ₡<?php echo $vars['prods'][0][12]; ?></s></h5>
            <h3 class="text-danger">¡Ahora: ₡<?php echo $vars['prods'][0][5]; ?>!</h5>
            <?php }else{ ?>
              <h3 class="text-primary">Precio: ₡<?php echo $vars['prods'][0][12]; ?></h5>
            <?php } ?>
          </div>
          <span class="text-dark">Contactenos para más información.</span>
      </div>
    </div>
  </section>
</section>
  <section id="features" class="padd-section text-center">
  </section>
<?php include_once 'public/footer.php'; ?>
