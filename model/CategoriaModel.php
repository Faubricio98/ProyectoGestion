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
    }
    
?>