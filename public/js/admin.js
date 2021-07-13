function modaleditAdmin(id,user,pass){
  $('#idadmin').val(id);
  $('#usere').val(user);
  $('#passe').val(pass);
  $('#modalEditAdmin').modal("show");
}

function modalinsAdmin(){
  $('#modalInsAdmin').modal("show");
}

$('#insAdminForm').submit(function (e) {
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
                  title: 'Ya hay un administrador con ese usuario.',
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

$('#editAdminForm').submit(function (e) {
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
                  title: 'Ya hay un administrador con ese usuario.',
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

function EliminarAdmin(){
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
          var data = { id: $('#idadmin').val() }
          $.ajax({
              url: '?controlador=Administrador&accion=eliminarAdmin',
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
