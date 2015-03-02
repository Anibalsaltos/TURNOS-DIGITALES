<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Asignatura</title>
<?php include '../metadatos.php'; ?>
<link href="../css/ej.widgets.core.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/jsrender.js" type="text/javascript"></script>
<script src="../js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="../js/jquery.globalize.js" type="text/javascript"></script>
<script src="../js/ej.widget.all.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Sofadi+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="container">
      <header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header visble-xs hidden-md hidden-sm hidden-lg">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img id="logo" src="../img/logo.png" alt="CITE-MATICO"/> CITE - MATICO
            </a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <div class="navbar-left hidden-xs visible-md visible-sm visible-lg">
            <h1 class="titulo"><img id="logo" src="../img/logo.png" alt="CITE-MATICO"/> CITE-MATICO</h1>
          </div>
          <nav id="navegacion">
          <ul class="nav navbar-nav navbar-right">
                <li class="le" ><a href="../index.php">INICIO</a></li>
                <li class="le"><a  href="../citas.php">CITAS</a></li>
                <li class="le"><a  href="../encuestas.php">ENCUESTAS</a></li>
                <li class="cs"><a href="../login.php">Cerrar Sesion</a></li>
            </ul>
            <ul class="usuario">
          <li>Bienvenido</li>
      </ul>
            
          </nav>
        </div>
      </div>
  </nav>
  </header>




               
<form action="insertarasignatura.php" method="post" >

   <div class="row ">
            
            
        
        <div class="row">
            
            <div id="contact-form" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 
                    <div class="form-group">
                      <label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
                      <div class="col-sm-9">
                          <input type="text" name = "descripcion" class="form-control" id="descripcion" placeholder=" ">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="estado" class="col-sm-3 control-label">Estado</label>
                      <div class="col-sm-9">
                        <input type="text" name = "estado" class="form-control" id="estado" placeholder=" ">
                      </div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-3">
                        <button type="submit" class="btn btn-default">Guardar</button>
                      </div>
                      <div class="col-sm-offset-2 col-sm-3">
                        <a href="formularioasignatura.php" class="btn btn-default">Cancelar</a>
                      </div>
                      
                    </div>

              
                  

            </div> 
     </div>
  </div>
</form>  
        

    
  </div>


  <?php include 'footer.php' ; ?>
</body>
</html>