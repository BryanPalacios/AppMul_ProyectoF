<?php
$err = isset($_GET['error']) ? $_GET['error'] : null ;
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
    <title>User</title>

  </head>
  <body>
    <header>
    </header>
    <div class="wrapper">
      <main>
        <?php
        switch ($err) {
          case 1:
            echo "<h2>Debe Completar todos los Campos</h2>";
          break;
          case 2:
            echo "<h2>Confirmar Contraseña</h2>";
          break;
          case 3:
            echo "<h2>Error de Conexión</h2>";
          break;
          case 4:
            echo "<h2>El Usuario ya Existe</h2>";
          break;
        }
        ?>
        <form class="" action="AddUser.php" method="post" enctype="multipart/form-data">
          <label for="name">Nombre : </label><br><input type="text" id="name" name="name" value=""><br>
          <label for="lastname">Apellido : </label><br><input type="text" id="lastname" name="lastname" value=""><br>
          <label for="email">E-Mail : </label><br><input type="email" id="email" name="email" value=""><br>
          <label for="pass">Contraseña : </label><br><input type="password" id="pass" name="pass" value=""><br>
          <label for="conf">Confirmar : </label><br><input type="password" id="conf" name="conf" value=""><br><br><br>
          <a href="../index.php"><input type="button" name="cancel" value="Cancelar"></a>
          <input type="submit" name="send" value="Registrarse">
        </form>
      </main>
    </div>
  </body>
</html>
