function modaleditOfers(id,inicio,fin,desc,prod){
  $('#idofer').val(id);
  $('#rangofechase').val(inicio + " - " + fin);
  $('#desce').val(desc);
  $("#prode").val(prod).change();
  $('#modalEditOfer').modal("show");
}

function modalinsOfers(){
  $('#modalInsOfer').modal("show");
}

var start = moment().add(1, 'days');
var end = moment().add(2, 'days');


$('input[name="rangofechas"]').daterangepicker({
    startDate: start,
    endDate: end,
    locale: {
        format: 'YYYY-MM-DD'
    }
});

$('input[name="rangofechas"]').on('apply.daterangepicker', function (ev, picker) {
    var uno = picker.startDate.format('YYYY-MM-DD');
    var dos = picker.endDate.format('YYYY-MM-DD');

    var ver = moment(uno).isSame(dos);

    if (ver) {
        picker.setEndDate(moment(uno).add(1, 'days'));
    }
});

$('#insOferForm').submit(function (e) {
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
                  title: 'Ya hay una oferta en estas fechas para este articulo.',
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

$('#editOferForm').submit(function (e) {
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
                  title: 'Ya hay una oferta en estas fechas para este articulo.',
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

function EliminarOfertar() {
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
            var data = { id: $('#idofer').val() }
            $.ajax({
                url: '?controlador=OfertasAdmin&accion=eliminarOferta',
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
