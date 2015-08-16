<!DOCTYPE html>
<html lang="es">
  <head>
    <?php header("Content-type: text/html; charset=utf-8"); ?>
    <link rel="stylesheet" href="CSS/Menu.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="CSS/Social.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="CSS/Contenido.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="Css/Pantallas.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-latest.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <title>Backpakers Ometepe</title>
  </head>
  <body>
    <header id="wrapper">
      <header>
        <div class="Contenedor">
          <div class="menu_bar">
              <a class="bt-menu"><span class="icon-list2"></span>Menu</a>
          </div>
          <div class="logo">
            <img class="banner" src="IMG/banner.png"/>
          </div>
          <nav class="menu">
            <ul>
              <li><a href="#">Inicio</a></li>
              <li class="submenu"><a href="php/Cultura.php">Cultura</a>
                <ul class="children">
                  <li><a href="#">Historia</a></li>
                  <li><a href="#">Tradicion</a></li>
                  <li><a href="#">Fiestas Patronales</a></li>
                </ul>
              </li>
              <li class="submenu"><a href="php/Destinos.php">Destinos</a>
                <ul class="children">
                  <li><a href="#">Charco Verde</a></li>
                  <li><a href="#">Ojo de Agua</a></li>
                  <li><a href="#">Punta Jesus Maria</a></li>
                  <li><a href="#">San Ramon</a></li>
                </ul>
              </li>
              <li class="submenu"><a href="php/Hospedajes.php">Hospedajes</a>
                <ul class="children">
                  <li><a href="#">Finca St Domingo</a></li>
                  <li><a href="#">Costa Azul</a></li>
                </ul>
              </li>
              <li class="usuario"><a href="php/Ingresar.php">Iniciar Seción</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="Contenedor">
        <section id="main">
          <h1><br><em>Isla de Ometepe</em></h1>
          <?php
            require("php/Component.php");
            $mb = new Component;
            echo $mb->getParrafo(1,0,6);
          ?>
        </section>
        <br><br>
      </div>
      <footer>
        <section id="acerca-de">
        <article>
        <hgroup><h2 class="titulo">Acerca de .....</h2></hgroup>
        <p>Somos una pagina dedicada a la promocion del turismo nacional Nicaraguense </p>
               </article>
        </section>
      </footer>
      <div id="copyright"><p>Todos los derechos reservados 2015</p></div>
      <div class="social">
          <ul>
            <li><a href="https://www.facebook.com/ometepeisla" target="_blank" class="icon-facebook"><IMG SRC="IMG/icon/facebook.png" WIDTH=100% HEIGHT=100% ></a></li>
            <li><a href="https://www.facebook.com/ometepeisla" target="_blank" class="icon-twitter"><IMG SRC="IMG/icon/twitter.png" WIDTH=100% HEIGHT=100% ></a></li>
            <li><a href="https://www.google.com.ni/search?newwindow=1&es_sm=93&biw=1366&bih=599&q=isla+de+ometepe&oq=isla+de+ometepe&gs_l=serp.3..35i39l2j0i67l8.33298.33298.0.34355.1.1.0.0.0.0.277.277.2-1.1.0....0...1c.1.64.serp..0.1.276.Lk_Gt6WwV-Q" target="_blank" class="icon-google"><IMG SRC="IMG/icon/google.png" WIDTH=100% HEIGHT=100% ></a></li>
            <li><a href="https://www.youtube.com/watch?v=e_ladIgwEjk" target="_blank" class="icon-youtube"><IMG SRC="IMG/icon/youtube.png" WIDTH=100% HEIGHT=100% ></a></li>
          </ul>
      </div>
    </header>
  </body>
</html>
