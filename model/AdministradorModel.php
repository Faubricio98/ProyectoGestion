<?php
class AdministradorModel{
    function __construct(){
        require 'libs/SPDO.php';
        $this->db=SPDO::singleton();
    }

    public function loginResult($user, $pass){
        $consulta = $this->db->prepare("call login('".$user."', '".$pass."');");
        $consulta->execute();
        $data=$consulta->fetchColumn();
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

    public function getAllAdmins(){
      $consulta = $this->db->prepare("call obtener_administradores();");
      $consulta->execute();
      $data=$consulta->fetchAll();
      $consulta->closeCursor();
      return $data;
    }

    public function insertar($user,$pass){
      $consulta = $this->db->prepare("call insertar_admin('".$user."','".$pass."'); ");
      $consulta->execute();
      $data=$consulta->fetchColumn();
      $consulta->closeCursor();
      return $data;
    }

    public function modificar($id,$user,$pass){
      $consulta = $this->db->prepare("call modificar_admin(".$id.",'".$user."','".$pass."');");
      $consulta->execute();
      $data=$consulta->fetchColumn();
      $consulta->closeCursor();
      return $data;
    }

    public function eliminar($id){
      $consulta = $this->db->prepare("call eliminar_admin(".$id.");");
      $consulta->execute();
      $data=$consulta->fetchColumn();
      $consulta->closeCursor();
      return $data;
    }

  }
 ?>
