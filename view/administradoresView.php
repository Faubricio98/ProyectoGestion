<?php include_once 'public/headerAdmin.php';?>
<section id="get-started" class="padd-section text-center">
  <section id="" class="container shadow-lg p-3 mt-5 bg-white rounded" data-aos="fade-in">
    <div class="row">
      <div class="" style="display:flex; justify-content: flex-end;">
        <button type="button" class="btn-primary" style="border:0;border-radius:2px" onclick="modalinsAdmin()">Nuevo</button>
      </div>
      <table class="table mt-2" id="example1">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($vars['adms'] as $item) { ?>
            <tr id="filaTabla" onclick="modaleditAdmin(<?php echo $item[0] ?>,'<?php echo $item[1] ?>','<?php echo $item[2] ?>')">
              <td><?php echo $item[1] ?></td>
              <td><?php echo $item[2] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
</section>

<!--Modal para modificar productos-->
<div class="modal" tabindex="-1" id="modalEditAdmin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Ver Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEditAdmin').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="editAdminForm" autocomplete="off" action="?controlador=Administrador&accion=modificarAdmin" method="post">
                <div class="modal-body">

                    <input type="hidden" id="idadmin" name="idadmin" class="form-control" required />

                    <label for="usere" class="font-weight-bold">Nombre de usuario</label>
                    <input class="form-control" type="text" id="usere" name="usere" placeholder="Usuario" required />

                    <label for="passe" class="font-weight-bold">Contraseña del usuario</label>
                    <input class="form-control" type="text" id="passe" name="passe" placeholder="Contraseña" required />

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Editar" />
                    <button type="button" class="btn btn-danger" onclick="EliminarAdmin()">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal para insertar productos-->
<div class="modal" tabindex="-1" id="modalInsAdmin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Nuevo Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalInsAdmin').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="insAdminForm" autocomplete="off" action="?controlador=Administrador&accion=insertarAdmin" method="post">
                <div class="modal-body">

                  <label for="user" class="font-weight-bold">Nombre de usuario</label>
                  <input class="form-control" type="text" id="user" name="user" placeholder="Usuario" required />

                  <label for="pass" class="font-weight-bold">Contraseña del usuario</label>
                  <input class="form-control" type="text" id="pass" name="pass" placeholder="Contraseña" required />

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'public/footer.php'; ?>
