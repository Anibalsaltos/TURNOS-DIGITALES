<?php
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();
?>
<table>
<tr><td><a href="usuario/formularioUsuarioInsert.php">Nuevo</a></td></tr>
<?php
foreach ($UsuarioCollectorObj->readUsuarios() as $c){
  echo "<tr>";
  echo "<td>".$c->getIdUsuario() ."</td>";
  echo "<td>".$c->getUsuario()."</td>";
  echo "<td>".$c->getPassword()."</td>";
  echo "<td>".$c->getIdRepresentante()."</td>";
  echo "<td><a href='usuario/formularioUsuarioEditar.php?id=".$c->getIdUsuario()."'>editar</a></td>";
  echo "<td><a href='usuario/eliminar.php?id=".$c->getIdUsuario()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
<tr><td colspan="6">Importante: Al eliminar un usuario se eliminara el Representante relacionado con este.</td></tr>
</table>