<?php include_once 'public/headerAdmin.php';?>
<section id="get-started" class="padd-section text-center">
  <section id="" class="container shadow-lg p-3 mt-5 bg-white rounded" data-aos="fade-in">
    <?php if ($vars['imagen'] == 1) { ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Producto guardado',
            showConfirmButton: false,
            timer: 1500
          });
        </script>
    <?php } if ($vars['imagen'] == -1) { ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Formato de imagen incorrecto, solo se aceptan formatos .png, .jpg o .jpeg',
            showConfirmButton: false,
            timer: 1500
          });
        </script>
    <?php } if ($vars['imagen'] == -2) { ?>
        <script>
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Ha ocurrido un error al subir la imagen, vuelva a intentarlo más tarde',
            showConfirmButton: false,
            timer: 1500
          });
        </script>
    <?php } 
      $vars['imagen'] = 2;
    ?>
    <div class="row">
      <div class="" style="display:flex; justify-content: flex-end;">
        <button type="button" class="btn-primary" style="border:0;border-radius:2px" onclick="modalinsProds()">Nuevo</button>
      </div>
      <table class="table mt-2" id="example2">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($vars['prods'] as $item) { ?>
            <tr id="filaTabla" onclick="modaleditProds(<?php echo $item[0] ?>,'<?php echo $item[1] ?>','<?php echo $item[6]?>','<?php echo $item[4] ?>',<?php echo $item[5] ?>)">
              <td><?php echo $item[1] ?></td>
              <td><?php echo $item[6] ?></td>
              <td><?php echo $item[4] ?></td>
              <td>₡<?php echo $item[5] ?></td>
              <td><img height="auto" src="public/img/productos/<?php echo $item[3].$item[2] ?>" style="max-width:150px" alt="img"></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>
</section>

<!--Modal para modificar productos-->
<div class="modal" tabindex="-1" id="modalEditProd">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Ver Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalEditProd').modal('toggle');">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span style="color:red" id="span"></span>
      <form id="editProdForm" autocomplete="off" action="?controlador=ProductosAdmin&accion=editarProducto" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" id="idprod" name="idprod" class="form-control" required />

          <label for="code" class="font-weight-bold">Código del producto</label>
          <input type="text" id="code" class="form-control mt-1" name="code" placeholder="Código" readonly/>

          <label for="nome" class="font-weight-bold">Nombre del producto</label>
          <input type="text" id="nome" class="form-control mt-1" name="nome" placeholder="Nombre" required />

          <label for="desce" class="font-weight-bold">Descripción del producto</label>
          <input type="text" id="desce" class="form-control mt-1" name="desce" placeholder="Descripción" required />

          <label for="prece" class="font-weight-bold">Precio de producto</label>
          <input type="number" id="prece" class="form-control mt-1" name="prece" placeholder="Precio" min="1" required />

          <label for="cate" class="font-weight-bold">Categoría del producto</label><br>
          <select name="cate" id="cate">
            <?php 
              foreach ($vars['categorias'] as $item) {
            ?>
              <option value="<?php echo $item[0] ?>"><?php echo $item[1] ?></option>
            <?php 
              }
            ?>
          </select><br>

          <label for="imge" class="font-weight-bold">Imagen del producto</label>
          <input type="file" id="imge" class="form-control mt-1" name="imge" placeholder="Imagen" accept="image/png, .jpeg, .jpg" />
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Editar" />
          <button type="button" onclick="eliminandoProducto()" class="btn btn-danger">Eliminar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!--Modal para insertar productos-->
<div class="modal" tabindex="-1" id="modalInsProd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$('#modalInsProd').modal('toggle');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <span style="color:red" id="span"></span>
            <form id="insProdForm" autocomplete="off" action="?controlador=ProductosAdmin&accion=insertarProducto" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <label for="nom" class="font-weight-bold">Nombre del producto</label>
                    <input type="text" id="nom" class="form-control mt-1" name="nom" placeholder="Nombre" required />

                    <label for="desc" class="font-weight-bold">Descripción del producto</label>
                    <input type="text" id="desc" class="form-control mt-1" name="desc" placeholder="Descripción" required />

                    <label for="prec" class="font-weight-bold">Precio de producto</label>
                    <input type="number" id="prec" class="form-control mt-1" name="prec" placeholder="Precio" min="1" required />

                    <label for="cat" class="font-weight-bold">Categoría del producto</label><br>
                    <select name="cat" id="cat">
                      <?php 
                        foreach ($vars['categorias'] as $item) {
                      ?>
                        <option value="<?php echo $item[0] ?>"><?php echo $item[1] ?></option>
                      <?php 
                        }
                      ?>
                    </select><br>

                    <label for="img" class="font-weight-bold">Imagen del producto</label>
                    <input type="file" id="img" class="form-control mt-1" name="img" placeholder="Imagen" accept="image/png, .jpeg, .jpg" required />

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php include_once 'public/footer.php'; ?>
