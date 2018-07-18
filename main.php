<?php 

class Database {
  protected $hostName;
  protected $userName;
  protected $password;
  protected $dbName;

  public function __construct ( $hostName, $UserName, $Password, $DbName ) {
    $this->hostName = $hostName;
    $this->userName = $UserName;
    $this->password = $Password;
    $this->dbName = $DbName;
  }
}
//  public function add(){

//  }
// }

// class Manufacturer extends Database{

// }

// class Model extends Manufacturer {


// }


?>