<?php
function conexion()
{
  $host = "localhost";
  $user = "root";
  $password = "tBgjyML3MDTBl2CYaqpr";
  $db = "almacenes";

  $conexion = mysqli_connect($host, $user, $password, $db);
  if (!$conexion) {
    die(" no hay conexion " . mysqli_connect_error());
  }
  return $conexion;
}

function getElements()
{
  $conexion = conexion();
  if ($conexion) {
    $sql = "SELECT * from almacen";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
      return $resultado;
    }
    return false;
  }
  return false;
}

function Add($id_elemento, $nombre, $cantidad, $descripcion)
{
  $conexion = conexion();
  if ($conexion) {
    $sql = "INSERT INTO almacen (id, id_elemento, nombre, cantidad, descripcion) 
    VALUES (NULL,'$id_elemento','$nombre','$cantidad','$descripcion')";
    $agregado = mysqli_query($conexion, $sql);
    if ($agregado) {
      echo "<script>window.location='index.php';</script>";
    }
  }
}

function Edit($id, $id_elemento, $nombre, $cantidad, $descripcion)
{
  $conexion = conexion();
  $sql = "UPDATE almacen 
  SET id_elemento= '$id_elemento', nombre='$nombre', cantidad='$cantidad',descripcion='$descripcion'  
  WHERE id='$id'";
  $editado = mysqli_query($conexion, $sql);
  if ($editado) {
    header("Location: ../../index.php");
  } else {
    echo "<script> alert('error')</script>";
  }
}

function Delete($id)
{
  $conexion = conexion();
  $sql = "DELETE FROM almacen 
  WHERE id = '$id'";
  $resultado = mysqli_query($conexion, $sql);
  if ($resultado) {
    header("Location: ../../index.php");
  }
}
