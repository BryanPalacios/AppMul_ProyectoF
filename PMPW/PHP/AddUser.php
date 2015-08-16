<?php
require("Sessions.php");
require("Connection.php");
$ses = new Sessions;
$ses->init();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
if($user!=null){
  header("location: ../User/Index.php");
}
$au = new AddUser;
$au->add();
/**
 *
 */
class AddUser
{

  var $cone;
  function __construct()
  {
    $this->cone = new Connection;
  }

  public function add(){
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $conf = $_POST["conf"];
    if($name==null or $lastname==null or $email==null or $pass==null or $conf==null){
      header("location: Unirse.php?error=1");
    }else if($pass!=$conf){
      header("location: Unirse.php?error=2");
    }else{
      $sql = "select * from usuario where Email='".$email."'";
      $result = $this->cone->procedure($sql);
      if($result){
        if(!$result->fetch_assoc()){
          $sql = "select (count(idUsuario)+1) as 'newId' from usuario";
          $result = $this->cone->procedure($sql);
          if($result){
            if($row=$result->fetch_assoc()){
              $sql = "insert into Usuario values (".$row['newId'].",'".$name."','".$lastname."','".$email."','".$pass."',null)";
              $rs = $this->cone->procedure($sql);
              if($rs){
                $ses = new Sessions;
                $ses->init();
                $ses->set("user",$email);
                header("location: ../User/index.php");
              }else{
                header("location: Unirse.php?error=3");
              }
            }
          }
        }else{
          header("location: Unirse.php?error=4");
        }
      }
    }
  }
}
?>
