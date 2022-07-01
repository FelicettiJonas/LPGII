<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Roles
{
  /** Poderiamos ter atributos aqui */

  /**
  * Este método busca todos as Roles armazenadas na base de dados
  *
  * @return   array
  */
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM roles');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
