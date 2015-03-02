
              <table>
              <tr><td><a href="aniolectivo/formularioaniolectivoinsertar.php" class = "boton">Crear Nuevo anio lectivo</a></td></tr> <?php
              include_once("aniolectivoCollector.php");
              $aniolectivoCollectorObj = new aniolectivoCollector();
              foreach ($aniolectivoCollectorObj->readanio_lectivos() as $c){
                echo "<tr>";
                echo "<td>".$c->getaano_lectivo_id() ."</td>";
                echo "<td>".$c->getdesrcripcion()."</td>";
                echo "<td>".$c->getestado()."</td>";
                echo "<td><a href='aniolectivo/formularioaniolectivoeditar.php?id=".$c->getano_lectivo_id()."'>Editar</a></td>";
                echo "<td><a href='aniolectivo/eliminaraniolectivo.php?id=".$c->getano_lectivo_id()."'>Eliminar</a></td>"; 
                echo "</tr>"; 
              }
              ?>
              </table>