<?php
// Conexión a la base de datos
include("con_db.php");

if (isset($_POST['guardar'])){
  if (strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1) {
      $telefono = trim($_POST ['telefono']);
      $correo = trim($_POST ['correo']);
      $fechareg = date("d/m/yy");
      $consulta = "INSERT INTO datos(id, numero, correo, fecha_reg) VALUES ('$telefono','$correo','$fechareg')";
      $resultado = mysqli_query($conex,$consulta);
      if ($resultado){
        ?>
        <h2> Registro Guardado</h3
        <?php
      } else {
        ?>
        h2> Registro no Guardado </h2>
        <?php
      }

    } else{
      ?>
      <h3>Por favor complete los datos</h3>
      <?php

    }
}


?>