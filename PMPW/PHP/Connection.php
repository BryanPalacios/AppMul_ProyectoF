<?php
  /**
   *
   */
  class Connection
  {
    var $connect;

    function __construct()
    {
      $this->connect = new mysqli('localhost','root','','BPO');
      if ($this->connect->connect_errno) {
        echo "Fallo al conectar a MySQL: ".$this->connect->connect_error;
      }
    }

    public function procedure($sql){
      $result = $this->connect->query($sql);
      return $result;
    }

    public function close_connect(){
      $this->connect->close();
    }
  }
?>
