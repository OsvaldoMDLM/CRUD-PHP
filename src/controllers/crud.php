<?php
/****create new item****/
if (isset($_POST['AddElement'])) {
    $id_elemento = $_POST['idElementoAdd'];
    $imagen = $_POST['imagenAdd'];
    $nombre = $_POST['nombreAdd'];
    $cantidad = $_POST['cantidadAdd'];
    $descripcion = $_POST['descripcionAdd'];
    if (isset($id_elemento) && isset($imagen) && isset($nombre) && isset($cantidad) && isset($descripcion)) {
        Agregar($id_elemento, $imagen, $nombre, $cantidad, $descripcion);
    }
}
/****update item****/
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $login = $_POST['login'];
    if (isset($nombre) && isset($correo) && isset($login) && isset($id)) {
        include_once('../model/models.php');
        Editar($id, $id_elemento, $imagen, $nombre, $cantidad, $descripcion);
    }
}
/****delete item****/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($id)) {
        include_once('../models/model.php');
        Eliminar($id);
    }
}
?>
