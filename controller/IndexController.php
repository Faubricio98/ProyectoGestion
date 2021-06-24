<?php

class IndexController {
    public function __construct() {
        $this->view = new View();
    } // constructor

    public function mostrar(){
      require 'model/IndexModel.php';
      $inicio = new IndexModel();

      $data['prods']=$inicio->masVistos(3);
      $data['ofers']=$inicio->getOfertas(3);

        $this->view->show("indexView.php", $data);
    } // listar
}

?>
