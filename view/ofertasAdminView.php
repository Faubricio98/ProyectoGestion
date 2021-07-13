<?php include_once 'public/headerAdmin.php';?>
<section id="get-started" class="padd-section text-center">
  <section id="" class="container shadow-lg p-3 mt-5 bg-white rounded" data-aos="fade-in">
    <div class="row">
      <div class="" style="display:flex; justify-content: flex-end;">
        <button type="button" class="btn-primary" style="border:0;border-radius:2px" onclick="modalinsOfers()">Nuevo</button>
      </div>
      <table class="table mt-2" id="example1">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Inicio</th>
            <th scope="col">Fin</th>
            <th scope="col">%Descuento</th>
            <th scope="col">Producto</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($vars['ofers'] as $item) { ?>
            <tr id="filaTabla" onclick="modaleditOfers(<?php echo $item[0] ?>,'<?php echo $item[1] ?>','<?php echo $item[2] ?>',<?php echo $item[3]?>,<?php echo $item[4] ?>)">
              <td><?php echo $item[1] ?></td>
              <td><?php echo $item[2] ?></td>
              <td><?php echo $item[3] ?></td>
              <td><?php echo $item[5] ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
</section>

<!--Modal para modificar productos-->
<div class="modal" tabindex="-1" id="modalEditOfer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Ver Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEditOfer').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="editOferForm" autocomplete="off" action="?controlador=OfertasAdmin&accion=editarOferta" method="post">
                <div class="modal-body">

                    <input type="hidden" id="idofer" name="idofer" class="form-control" required />

                    <label for="rangofechas" class="font-weight-bold">Rango de fechas de la oferta</label>
                    <input class="form-control" type="text" id="rangofechase" name="rangofechas" placeholder="Rango de Fechas" required />

                    <label for="desce" class="font-weight-bold">Descuento del Producto</label>
                    <input type="number" id="desce" class="form-control mt-1" name="desce" placeholder="Descuento" min="1" required />

                    <label for="prode" class="font-weight-bold">Producto a descontar</label>
                    <select class="form-control mt-1" name="prode" id="prode">
                      <?php foreach ($vars['prods'] as $item) { ?>
                        <option value="<?php echo $item[0] ?>"><?php echo $item[6] ?></option>
                      <?php } ?>
                    </select>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Editar" />
                    <button type="button" class="btn btn-danger" onclick="EliminarOfertar()">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal para insertar productos-->
<div class="modal" tabindex="-1" id="modalInsOfer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalInsOfer').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="insOferForm" autocomplete="off" action="?controlador=OfertasAdmin&accion=insertarOferta" method="post">
                <div class="modal-body">

                  <label for="rangofechas" class="font-weight-bold">Rango de fechas de la oferta</label>
                  <input class="form-control" type="text" name="rangofechas" placeholder="Rango de Fechas" required />

                  <label for="desce" class="font-weight-bold">Descuento del Producto</label>
                  <input type="number" id="desce" class="form-control mt-1" name="desce" placeholder="Descuento" min="1" max="100" required />

                  <label for="prode" class="font-weight-bold">Producto a descontar</label>
                  <select class="form-control mt-1" name="prode" id="prode">
                    <?php foreach ($vars['prods'] as $item) { ?>
                      <option value="<?php echo $item[0] ?>"><?php echo $item[6] ?></option>
                    <?php } ?>
                  </select>
                  </select>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'public/footer.php'; ?>
