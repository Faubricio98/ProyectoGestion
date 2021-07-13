function modaleditProds(id,cod,nom,desc,pre){
  $('#idprod').val(id);
  $('#code').val(cod);
  $('#nome').val(nom);
  $('#desce').val(desc);
  $('#prece').val(pre);
  $('#modalEditProd').modal("show");
}

function eliminandoProducto() {
  var id = document.getElementById('idprod').value;
  parametros = {"id": id};
  $.ajax(
    {
      data: parametros,
      url: '?controlador=ProductosAdmin&accion=eliminarProducto',
      type: 'post',
      beforeSend: function () { }, //antes de enviar
      success: function (response) {
        location.reload();
      } //se ha enviado
    }
  );
}

function modalinsProds() {
  alert('Hola');
  $('#modalInsProd').modal("show");
}
