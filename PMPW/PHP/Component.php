<?php
require("Connection.php");
/**
 *a las almuadillas "#" de las etiquetas "a"
 */
class Component
{
  var $connect;

  function __construct()
  {
    $this->connect = new Connection;
  }

  public function get_menu(){
    $sql = "select * from category";
    $result = $this->connect->procedure($sql);
    $return = "";
    if($result){
      $return = $return."<nav><ul>";
      $return = $return."<li><a href='#'>Inicio</a></li>";
      while ($row=$result->fetch_assoc()) {
        $return = $return."<li><a href='#'>".$row["name_category"];
        $sql = "select * from article where category_id_category=".$row["id_category"];
        $results = $this->connect->procedure($sql);
        if ($results) {
          $return = $return."<ul>";
          while ($rows=$results->fetch_assoc()) {
            $return = $return."<li><a href='#'>".$rows["title_article"];
          }
          $return = $return."</ul>";
        }
        $return = $return."</a></li>";
      }
      $return = $return."<li><a href='#'>Galeria</a></li>";
      $return = $return."</ul></nav>";
    }
    return $return;
  }

  public function get_review(){
    $sql = "select * from article where id_article<5";
    $result = $this->connect->procedure($sql);
    $return = "";
    if ($result) {
      while ($row=$result->fetch_assoc()) {
        $return = $return."<article>";
        $return = $return."<div class='img-article'><img src=";
        $sql = "select url_resource from resource where id_resource=".$row["resource_id_resource"];
        $results = $this->connect->procedure($sql);
        if ($results) {
          $rows = $results->fetch_assoc();
          $return = $return.$rows["url_resource"];
        }else{
          $return = $return."null";
        }
        $return = $return."/></div>";
        $return = $return."<div class='content'>";
        $return = $return."<h2>".$row["title_article"]."</h2><h6>".$row["date_article"]."</h6>";
        $sql = "select * from paragraph where article_id_article=".$row["id_article"];
        $results = $this->connect->procedure($sql);
        if ($results) {
          $rows = $results->fetch_assoc();
          $return = $return."<p>".$rows["text_paragraph"]."</p>";
        }
        $return = $return."<a href='#'>Leer mas...</a></div></article>";
      }
    }
    return $return;
  }

  public function getParrafo($id,$in,$if){
    $sql = "select * from Parrafo where  idcategoria='".$id."' and idParrafo > '".$in."' and idParrafo < '".$if."'";
    $result = $this->connect->procedure($sql);
    $return = "";
    if ($result) {
      while ($row=$result->fetch_assoc()) {
        $return = $return."<article><img src='".$row["URLParrafo"]."' alt='' class='imgi'/>";
        $return = $return."<p class='pi'>".$row["Parrafo"]."</p></article>";
      }
    }
    return $return;
  }

  public function getIMG($in,$if){
    $sql = "select * from Parrafo where idParrafo > '".$in."' and idParrafo < '".$if."'";
    $result = $this->connect->procedure($sql);
    $return = "";
    if ($result) {
      $return = $return."<div id='Scroll'>";
      while ($row=$result->fetch_assoc()) {
        $return = $return."<img src='".$row["URLParrafo"]."' alt='' />";
      }
      $return = $return."</div>";
    }
    return $return;
  }
  public function close_component(){
    $this->connect->close_connect();
  }
}
?>
