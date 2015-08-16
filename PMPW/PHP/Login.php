<?php
require("Connection.php");
require("Sessions.php");
$lg = new Login;
$lg->iniciar();
/**
 *
 */
class Login
{

  var $cn;
  var $ses;
  function __construct()
  {
    $this->cn = new Connection;
    $this->ses = new Sessions;
  }

  public function iniciar(){
    $query = "select * from Usuario where Email='".$_POST['user']."' and Pass='".$_POST['pass']."'";
    $result = $this->cn->procedure($query);
    if($result){
      if($row=$result->fetch_assoc()){
        $this->ses->init();
        $this->ses->set("user",$row["Email"]);
        header("location: ../User/index.php");
      }
      else{
        header("location: Ingresar.php?error=1");
      }
    }else{
      header("location: Ingresar.php?error=1");
    }
  }
}

?>
