<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Administración - Año Lectivo</title>
<body>
<form action="insertaraniolectivo.php" method="post" >
 
        <div class="form-group">
        <label for="descripcion" class="col-sm-3 control-label">Año Lectivo</label>
          <div class="col-sm-9">
            <input type="text" name = "anio" class="form-control" id="descripcion" placeholder=" ">
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
                  <br/>
                  <br/>
                  <button type="submit" class="btn btn-default">Guardar</button>
                  <br/>
              </div>
              <div class="col-sm-offset-2 col-sm-3">
                <br/>
                <a href="formularioañolectivo.php" class="btn btn-default">Cancelar</a>
              </div>
          </div>
</form>  
        

    
  </div>
</body>
</html>