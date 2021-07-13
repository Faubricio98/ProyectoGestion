var imagen = document.getElementById('imgProd');
var cont = document.getElementById('secProd');

if(imagen != null){
  imagen.addEventListener('mouseenter', e => {
    imagen.style.transform = "scale(1.5)";
          imagen.style.transition = "transform 0.25s ease";
  });

  imagen.addEventListener('mouseleave', e => {
    imagen.style.transform = "scale(1)";
          imagen.style.transition = "transform 0.25s ease";
  });
}

$('#example2').DataTable({
    "lengthChange": false,
    "searching": false,
    "lengthMenu": [4],
    "ordering": false,
    "language": {
        "infoEmpty": "No hay registros disponibles",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "oPaginate": {
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        }
    }
});

$('#example1').DataTable({
    "lengthChange": false,
    "searching": false,
    "lengthMenu": [10],
    "ordering": false,
    "language": {
        "infoEmpty": "No hay registros disponibles",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "oPaginate": {
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        }
    }
});
