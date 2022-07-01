<?php

use Application\core\Controller;

class User extends Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  {
    $Users = $this->model('Users'); // é retornado o model Users()
    $Roles = $this->model('Roles');
    $data = $Users::findAll();
    $dataRoles = $Roles::findAll();
    $this->view('user/index', ['users' => $data, 'roles' => $dataRoles]);
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      $Roles = $this->model('Roles');
      $dataUsers = $Users::findById($id);
      $dataRoles = $Roles::findAll();
      $this->view('user/show', ['user' => $dataUsers, 'role' => $dataRoles]);
    } else {
      $this->pageNotFound();
    }
  }

  /**
  * chama a view show.php da seguinte forma /user/show passando um parâmetro 
  * via URL /user/show/id e é retornado um array contendo (ou não) um determinado
  * usuário. Além disso é verificado se foi passado ou não um id pela url, caso
  * não seja informado, é chamado a view de página não encontrada.
  * @param  int   $id   Identificado do usuário.
  */
  public function save($idUser = null)
  {
    $role = $_POST['role'];
    if (is_numeric($idUser)) {
      $Users = $this->model('Users');
      $Users->updateRole($idUser, $role);
      $this->view('user/save');
      // $this->index();
    } else {
      $this->pageNotFound();
    }
  }


}
