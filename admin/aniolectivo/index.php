
              <table>
              <tr><td><a href="aniolectivo/formularioaniolectivoinsertar.php" class = "boton">Nuevo</a></td></tr> <?php
              include_once("aniolectivoCollector.php");
              $aniolectivoCollectorObj = new aniolectivoCollector();
              foreach ($aniolectivoCollectorObj->readanio_lectivos() as $c){
                echo "<tr>";
                echo "<td>".$c->getAnioLectivo() ."</td>";
                echo "<td>".$c->getAnio()."</td>";
                echo "<td>".$c->getEstado()."</td>";
                echo "<td><a href='aniolectivo/formularioaniolectivoeditar.php?id=".$c->getAnioLectivo()."'>Editar</a></td>";
                echo "<td><a href='aniolectivo/eliminaraniolectivo.php?id=".$c->getAnioLectivo()."'>Eliminar</a></td>"; 
                echo "</tr>"; 
              }
              ?>
              </table>