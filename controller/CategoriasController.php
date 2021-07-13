<?php

    class CategoriasController{

        public function __construct() {
            $this->view = new View();
        }

        public function mostrar(){
            include 'model/CategoriaModel.php';
            $inicio = new CategoriaModel();
            $data['catId'] = $_GET['id'];
            $data['categorias'] = $inicio->getAllCategorias();
            $data['productos'] = $inicio->getProductosByCategoria($_GET['id']);

            $min = 18;
            $data['actualPage'] = $_GET['page'];
            if(count($data['productos']) <= $min){
                $data['pages'] = 1;
            }else{
                $data['pages'] = count($data['productos']) / $min;
                if(fmod($data['pages'], 1) > 0){
                    $data['pages'] = $data['pages'] + (1 - fmod($data['pages'], 1));
                }
                if($data['actualPage'] > $data['pages']){
                    $data['actualPage'] = $data['pages'];
                }
                $data['productos'] = array_slice($data['productos'], ($data['actualPage']-1)*$min, $min);
            }
            $data['previousPage'] = $_GET['page'] - 1;
            $data['nextPage'] = $_GET['page'] + 1;

            $this->view->show("listarProductosCategoriaView.php", $data);
        }

    }

?>