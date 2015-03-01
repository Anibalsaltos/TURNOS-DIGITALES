<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <?php include 'metadatos.php'; ?>
  <title>Cierre de Sesion</title>
  </head>
  <body>
    <div class="container">
    <header>
      <div class="row">
        <div class="col-xs-12">
              <img id="logo" src="img/logo.png" alt="CITE-MATICO"/>
          <h1 class="titulo-login">CITE - MATICO</h1>
        </div>
      </div>
    </header>

 <?php
        if (isset($_SESSION['nombre'])){
          session_destroy();
        echo "<b><center>Se ha desconectado la sesión exitosamente </b><br/>" ;
        echo "<a href='index.php' class='boton'>Ir al login</a></center>";
      }else{
        echo "<b><center>Problema al cerrar la sesion.....</b><br/>" ;
        echo "<a href= 'index.php' class='boton'>Ir al login</a></center><br/><br/><br/>";
      
    }?>
    <?php include 'footer.php'; ?>
  </div>

  </body>
</html>