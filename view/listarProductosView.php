<?php include_once 'public/header.php'; ?>

<style>
    .pagination a:hover:not(.active) {
        background-color: #031F3B;
        color: white;
    }
    .active{
        background-color: #71c55d;
        color: white;
    }
    .active:hover{
        background-color: #71c55d;
        color: white;
    }
</style>

<!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">
        <div class="container" data-aos="fade-up" style="margin-top: 2em;">
            <div class="section-title text-center">
                <h2>Estos son nuestros artículos</h2>
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
                                <h4><?php echo $item[6] ?></h4>
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

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php
            if ($vars['pages'] == 1) {
        ?>
                <li class="page-item"><a class="page-link active" href="#get-started"><?php echo $vars['actualPage'] ?></a></li>
        <?php
            }else{
                if($vars['previousPage'] == 0){
        ?>
                    <li class="page-item disabled">
                        <a class="page-link" tabindex="-1" aria-disabled="true">Anterior</a>
                    </li>
        <?php
                }else{
        ?>
                    <li class="page-item">
                        <a class="page-link" href="?controlador=Productos&accion=mostrarListar&page=<?php echo $vars['previousPage'] ?>">Anterior</a>
                    </li>
        <?php
                }
        ?>
                <li class="page-item"><a class="page-link active" href="#get-started"><?php echo $vars['actualPage'] ?></a></li>
        <?php
                if($vars['nextPage'] > $vars['pages']){
        ?>
                    <li class="page-item disabled">
                        <a class="page-link" tabindex="-1" aria-disabled="true">Siguiente</a>
                    </li>
        <?php
                }else{
        ?>
                    <li class="page-item">
                        <a class="page-link" href="?controlador=Productos&accion=mostrarListar&page=<?php echo $vars['nextPage'] ?>">Siguiente</a>
                    </li>
        <?php
                }
            }
        ?>
    </ul>
</nav>


<?php include_once 'public/footer.php'; ?>