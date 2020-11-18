<?php 
  include 'conexion.php';

  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $fecha = $_POST['fecha'];
  $id_departamento = $_POST['id_departamento'];

  actualizar_emp($id,$nombre,$apellido,$fecha,$id_departamento);



?>