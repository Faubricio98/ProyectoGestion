function modaleditCat(id,user,pass){
  $('#idcat').val(id);
  $('#cate').val(user);
  $('#modalEditCat').modal("show");
}

function modalinsCat(){
  $('#modalInsCat').modal("show");
}

$('#insCatForm').submit(function (e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        type: 'post',
        url: url,
        data: form.serialize(),
        success: function (response) {
          if (response == 1) {
              location.reload();
          } else {
              Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Ya hay una categoria con este nombre.',
                  showConfirmButton: false,
                  timer: 1500
              });
          }

        },
        error: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error en el sistema.',
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
});

$('#editCatForm').submit(function (e) {
    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
        type: 'post',
        url: url,
        data: form.serialize(),
        success: function (response) {
          if (response == 1) {
              location.reload();
          } else {
              Swal.fire({
                  position: 'center',
                  icon: 'error',
                  title: 'Ya hay una categoria con este nombre.',
                  showConfirmButton: false,
                  timer: 1500
              });
          }

        },
        error: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Error en el sistema.',
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
});

function EliminarCat(){
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
          var data = { id: $('#idcat').val() }
          $.ajax({
              url: '?controlador=Categorias&accion=eliminarCategoria',
              type: 'POST',
              data: data,
              success: function (response) {
                  location.reload();
              },
              error: function (response) {
                  Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'Error en el sistema.',
                      showConfirmButton: false,
                      timer: 1500
                  });
              }
          });
      }
  })
}
