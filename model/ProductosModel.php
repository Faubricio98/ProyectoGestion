<?php
  class ProductosModel{
    function __construct(){
      require 'libs/SPDO.php';
      $this->db=SPDO::singleton();
    }
  
    public function getProducto($id){
      $consulta = $this->db->prepare("call get_producto_by_id (".$id.");");
      $consulta->execute();
      $data=$consulta->fetchAll();
      $consulta->closeCursor();
      return $data;
    }

    public function getAllProductos(){
      $consulta = $this->db->prepare("call sp_get_articulos();");
      $consulta->execute();
      $data=$consulta->fetchAll();
      $consulta->closeCursor();
      return $data;
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
