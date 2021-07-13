<?php include_once 'public/headerLogin.php'; ?>
<section id="get-started" class="padd-section">
  <section id="" class="container mt-5 shadow-lg p-3 bg-white rounded" data-aos="fade-in">
    <form autocomplete="off" class="" action="?controlador=Administrador&accion=loginResult" method="post">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Escriba su usuario" required>
      </div>
      <div class="form-group mt-1">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Escriba su contraseña" required>
      </div>
      <input type="submit" class="btn-primary mt-1" value="Ingresar" style="border:0;border-radius:2px" />
    </form>
  </section>

  <?php if ($vars == null){ ?>
  <div class="alert alert-info mt-3 text-center" role="alert">
    <h4 class="alert-heading">Sitio Administrativo</h4>
    <p>Este módulo es solo para trabajadores/socios de la organización, su función es completamente administrativa.</p>
    <hr>
    <p class="mb-0">En caso de no ser un administrador continue navegando en otros módulos :)</p>
  </div>
<?php } else { ?>
  <div class="alert alert-danger text-center mt-3" role="alert">
  ¡Nombre de usuario o contraseña incorrectos!
</div>
<?php } ?>
</section>
<?php include_once 'public/footer.php'; ?>
