<?php
require("Sessions.php");
$ses = new Sessions;
$ses->init();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
if($user!=null)
  header("location: ../User/Index.php");
$err = isset($_GET['error']) ? $_GET['error'] : null;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/Menu.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../CSS/Social.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../CSS/Contenido.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../Css/Pantallas.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../Css/Usuario.css" media="screen" title="no title" charset="utf-8">
    <title>Iniciar Seción</title>
  </head>
  <body>
    <head>

    </head>
    <div class="wrapper">
      <main>
        <?php
          if($err==1){
            echo "<h2>Usuario o Contraseña Incorrecta.</h2>";
          }
        ?>
        <form class="" action="Login.php" method="post">
          <label for="user">Usuario : </label><br><input type="email" name="user" id="user" value=""><br>
          <label for="pass">Contraseña : </label><br><input type="password" name="pass" id="pass" value=""><br>
          <input type="submit" value="Ingresar">
          <a href="Unirse.php"><input type="button" value="Crear Cuenta"></a>
        </form>
      </main>
    </div>
  </body>
</html>
