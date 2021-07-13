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

  }
 ?>
