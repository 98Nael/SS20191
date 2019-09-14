<?php

/*
 * @author aashgar
 */
class dbConnection {
    //put your code here
    private $connection;
    public function __construct() {
        $this->connection=
          new mysqli("localhost", "root", "root", "university")
        or die("ERROR");
    }
    public function verifyUser($userName,$password) {
      $rs=  $this->connection->query(
     "Select * from users where userName='$userName' And "
              . "password='$password'");
      if(mysqli_num_rows($rs) != 0)
          return TRUE;
      else
          return FALSE;
//      $rs=  $this->connection->prepare(
//     "Select * from users where userName=? And "
//              . "password=?");
//      $rs->bind_param("ss", $userName,$password);
//      $rs->execute();
//      if($rs->fetch() !=0)
//          return TRUE;
//      else
//          return FALSE;
              
    }
}
