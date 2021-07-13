<?php

    class CategoriaModel{
        function __construct(){
            require 'libs/SPDO.php';
            $this->db=SPDO::singleton();
        }

        public function getAllCategorias(){
            $consulta = $this->db->prepare("CALL sp_get_categorias;");
            $consulta->execute();
            $data=$consulta->fetchAll();
            $consulta->closeCursor();
            return $data;
        }

        public function getProductosByCategoria($id){
            $consulta = $this->db->prepare("CALL sp_get_productos_by_categorias(".$id.");");
            $consulta->execute();
            $data=$consulta->fetchAll();
            $consulta->closeCursor();
            return $data;
        }
    }
    
?>