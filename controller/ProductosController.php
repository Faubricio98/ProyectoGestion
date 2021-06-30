<?php
class ProductosController{
    public function __construct() {
        $this->view = new View();
    }

    public function mostrar(){
      require 'model/ProductosModel.php';
      $inicio = new ProductosModel();

      $id = $_POST['id'];

      $data['prods']=$inicio->getProducto($id);

        $this->view->show("ProductoView.php", $data);
    }
}
?>
