function modaleditProds(id,cod,nom,desc,pre){
  $('#idprod').val(id);
  $('#code').val(cod);
  $('#nome').val(nom);
  $('#desce').val(desc);
  $('#prece').val(pre);
  $('#modalEditProd').modal("show");
}

function eliminandoProducto() {
  Swal.fire({
    title: '¿Seguro?',
    text: 'No se podrán revertir los cambios',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, eliminar',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.value) {
      // Proceso de eliminacion de datos
      var id = document.getElementById('idprod').value;
      parametros = { "id": id };
      $.ajax(
        {
          data: parametros,
          url: '?controlador=ProductosAdmin&accion=eliminarProducto',
          type: 'post',
          beforeSend: function () { }, //antes de enviar
          success: function (response) {
            Swal.fire({
              position: 'center',
              icon: 'success',
              title: 'Producto editado',
              showConfirmButton: false,
              timer: 2000
            });
            location.reload();
          } //se ha enviado
        }
      );
    }
  })
}

function modalinsProds() {
  $('#modalInsProd').modal("show");
}
