    <table>
        <tr><td><a href="asignatura/formularioasignaturainsertar.php" class = "boton">Crear Nueva Asignatura</a></td></tr>
              <?php
              foreach ($alumnoCollectorObj->readasignaturas() as $c){
                echo "<tr>";
                echo "<td>".$c->getasignatura_id() ."</td>";
                echo "<td>".$c->getdesrcripcion()."</td>";
                echo "<td>".$c->getestado()."</td>";
                echo "<td><a href='asignatura/formularioalumnoeditar.php?id=".$c->getasignatura_id()."'>Editar</a></td>";
                echo "<td><a href='asignatura/eliminarasignatura.php?id=".$c->getasignatura_id()."'>Eliminar</a></td>"; 
                echo "</tr>"; 
              }
              ?>
    </table>