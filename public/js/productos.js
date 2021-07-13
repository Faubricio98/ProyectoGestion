function modaleditProds(id,cod,nom,desc,pre){
  $('#idprod').val(id);
  $('#code').val(cod);
  $('#nome').val(nom);
  $('#desce').val(desc);
  $('#prece').val(pre);
  $('#modalEditProd').modal("show");
}

function modalinsProds(){
  $('#modalInsProd').modal("show");
}
