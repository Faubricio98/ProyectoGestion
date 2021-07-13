<?php include_once 'public/headerAdmin.php';?>
<section id="get-started" class="padd-section text-center">
  <section id="" class="container shadow-lg p-3 mt-5 bg-white rounded" data-aos="fade-in">
    <div class="row">
      <div class="" style="display:flex; justify-content: flex-end;">
        <button type="button" class="btn-primary" style="border:0;border-radius:2px" onclick="modalinsCat()">Nuevo</button>
      </div>
      <table class="table mt-2" id="example1">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($vars['cats'] as $item) { ?>
            <tr id="filaTabla" onclick="modaleditCat(<?php echo $item[0] ?>,'<?php echo $item[1] ?>')">
              <td><?php echo $item[1] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
</section>

<!--Modal para modificar productos-->
<div class="modal" tabindex="-1" id="modalEditCat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Ver Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEditCat').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="editCatForm" autocomplete="off" action="?controlador=Categorias&accion=modificarCategoria" method="post">
                <div class="modal-body">

                    <input type="hidden" id="idcat" name="idcat" class="form-control" required />

                    <label for="cate" class="font-weight-bold">Nombre de la categoria</label>
                    <input class="form-control" type="text" id="cate" name="cate" placeholder="Categoria" required />

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Editar" />
                    <button type="button" class="btn btn-danger" onclick="EliminarCat()">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal para insertar productos-->
<div class="modal" tabindex="-1" id="modalInsCat">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Nuevo Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalInsCat').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="insCatForm" autocomplete="off" action="?controlador=Categorias&accion=insertarCategoria" method="post">
                <div class="modal-body">

                  <label for="cat" class="font-weight-bold">Nombre de la categoria</label>
                  <input class="form-control" type="text" id="cat" name="cat" placeholder="Categoria" required />

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'public/footer.php'; ?>
