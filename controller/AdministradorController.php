<?php
class AdministradorController {
    public function __construct() {
        $this->view = new View();
    }

    public function login(){
      $this->view->show("loginView.php");
    }

    public function loginResult(){
      require 'model/AdministradorModel.php';
      $model = new AdministradorModel();

      $username = $_POST['username'];
      $password = $_POST['password'];

      $data = $model -> loginResult($username,$password);

      if($data == -1){
        $this->view->show("loginView.php", $data);
      }else{
        session_start();
        $_SESSION['user'] = $data;

        $prods['prods'] = $model->getAllProductos();
        $this->view->show("productosAdminView.php", $prods);
      }
    }

    public function logout(){
      unset($_SESSION['user']);
      $this->view->show("loginView.php");
    }

    public function administradores(){
        require 'model/AdministradorModel.php';
        $model = new AdministradorModel();
        $data['adms'] = $model->getAllAdmins();
        $this->view->show("administradoresView.php", $data);
    }

    public function insertarAdmin(){
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      require 'model/AdministradorModel.php';
      $model = new AdministradorModel();

      $result = $model->insertar($user,$pass);
      echo $result;
    }

    public function modificarAdmin(){
      $id = $_POST['idadmin'];
      $user = $_POST['usere'];
      $pass = $_POST['passe'];

      require 'model/AdministradorModel.php';
      $model = new AdministradorModel();

      $result = $model->modificar($id,$user,$pass);
      echo $result;
    }

    public function eliminarAdmin(){
      $id = $_POST['id'];

      require 'model/AdministradorModel.php';
      $model = new AdministradorModel();

      $result = $model->eliminar($id);
      echo $result;
    }

  }
 ?>
