<?php
class AConexion extends mysqli {

  public function __construct() {
    parent::__construct(ASERVER,AUSER,APASS,ABD);
    $this->connect_errno ? die('Error en la conexión a la base de datos') : null;
    $this->set_charset("utf8");
  }

  public function rows($query) {
    return mysqli_num_rows($query);
  }

  public function liberar($query) {
    return mysqli_free_result($query);
  }

  public function recorrer($query) {
    return mysqli_fetch_array($query);
  }

}



 ?>
