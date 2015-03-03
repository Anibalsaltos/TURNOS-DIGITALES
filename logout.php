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

      
        session_destroy();
         header('Location: index.php');

      ?>
    <?php include 'footer.php'; ?>
  </div>

  </body>
</html>