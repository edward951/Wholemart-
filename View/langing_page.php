<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página administrador Wholemart</title>
    <link rel="shortcut icon" href="images/logoico2.ico" type="img">
    <script src="https://kit.fontawesome.com/229a386a5d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_landig_page.css">
    li
</head>
<body>
<?php
  //  session_start();
  $activo = $_SESSION['activo'] ? $_SESSION['activo'] : '';
  if ($activo == '') {
  ?>
      <script type="text/javascript" language="JavaScript">
          // si el usuario coincide con el de la base valida el rol para decidir a que ventana lo dirige como es administrador lo dirige  a esta ruta que corresponde a la principal que tiene todos los poderes
          window.location = '/wholemart1.2/index.html';
      </script>
  <?php
  } else {
  ?>

    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="./images/logoLogin.svg" alt="">
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="images/logoLogin.svg" alt="">
                   <div class="menu-horizontal">
                    <ul>
                        <li><a href="bodega.php">Bodega</a></li>
                        <li><a href="listar_usuarios.php">Usuario</a></li>
                        <li><a href="inventario.php">Inventario</a></li>
                       <!-- <li><a href="registrar_proveedor.php">Clientes</a></li>-->
                        <div class="btn">
                        <li><a href="/wholemart1.2/controlador/logout1.php"><button type="submit" class="btn btn-success" name="logout">CERRAR SESION</button></a></li>
                        </div>
                        
                    </ul>
                  </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container__cover">
            <div class="cover">
                <div class="text">
                    <h1><B>WHOLEMART</B>, el software de inventarios que tu negocio necesita <b>¡ACTUALIZATE!</b></h1>

                    <p>Lleva tu inventario a otro nivel. <b>Controla la entrada y salida de tus productos.</b></p>
                </div>

                <div class="svg">
                    <img src="images/4016255.svg" alt="">
                </div>
            </div>
        </div>
    </main>
<!--Creación del Footer-->
<footer>
    <div class="containerFooter">
      <div class="boxFooter">
        <div class="logo">
          <img src="images/logo-footer.svg" class="logo">
        </div>
        <div class="derechosReservados">
          <hr>
          <p>Derechos de autor © <span id="añoFooter"></span> Todos los derechos reservados<b> Wholemart</b></p>
        </div>
      </div>
      <div class="boxFooter">
        <a href="https://www.facebook.com/edward.fonsek.9/"><i class="fa-brands fa-facebook"></i>Facebook</a>
        <a href="https://www.instagram.com/andres_fonseca28/"><i class="fa-brands fa-instagram"></i>Instagram</a>
        <a href="https://www.twitch.tv/ilm_reddragon"><i class="fa-brands fa-twitter"></i>Twitter</a>
      </div>
    </div>
  
    <script>
      // Obtener el elemento del footer donde se mostrará el año
      var añoFooter = document.getElementById("añoFooter");
  
      // Obtener el año actual
      var añoActual = new Date().getFullYear();
  
      // Mostrar el año en el footer
      añoFooter.textContent = añoActual;
    </script>
  </footer>
<script src="js/boton_menu.js"></script>
<?php
  }
  ?>
</body>
</html>