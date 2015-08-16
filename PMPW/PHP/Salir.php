<?php
require("Sessions.php");
$ses = new Sessions;
$ses->init();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
if($user!=null){
  $ses->destroy();
  header("location: ../Index.php");
}
?>
