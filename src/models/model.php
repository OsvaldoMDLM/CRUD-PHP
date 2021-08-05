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

function Agregar($id_elemento, $imagen, $nombre, $cantidad, $descripcion)
{
    $conexion = conexion();
    if ($conexion) {
        $sql = "INSERT INTO almacen (id, id_elemento, imagen, nombre, cantidad, descripcion) VALUES (NULL,'$id_elemento','$imagen','$nombre','$cantidad','$descripcion')";
        $agregado = mysqli_query($conexion, $sql);
        if ($agregado) {
            echo "<script> alertify.success('Usuario Agregado'); setTimeout(function(){window.location='./home.php'},1200);</script>";
        } else {
            echo "<script> alertify.Error('Error'); </script>";
        }
    }
}

function Editar($id, $id_elemento, $imagen, $nombre, $cantidad, $descripcion)
{
    $conexion = conexion();
    $sql = "UPDATE almacen SET id_elemento= '$id_elemento', imagen='$imagen',nombre='$nombre', cantidad='$cantidad',descripcion='$descripcion'  WHERE id='$id'";
    $editado = mysqli_query($conexion, $sql);
    if ($editado) {
        header("Location: ../view/home.php");
    } else {
        echo "<script> alertify.Error('Error'); </script>";
    }
}

function Eliminar($id)
{
    $conexion = conexion();
    $sql = "DELETE FROM almacen WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        header("Location: ../view/home.php");
    }
}
