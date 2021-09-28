<?php
/****create new item****/
if (isset($_POST['AddElement'])) {
    $id_elemento = $_POST['idElementoAdd'];
    $nombre = $_POST['nombreAdd'];
    $cantidad = $_POST['cantidadAdd'];
    $descripcion = $_POST['descripcionAdd'];
    if (isset($id_elemento) && isset($nombre) && isset($cantidad) && isset($descripcion)) {
        Add($id_elemento, $nombre, $cantidad, $descripcion);
    }
}
/****update item****/
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $id_elemento = $_POST['idElemento'];
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    if (isset($id_elemento) && isset($nombre) && isset($cantidad) && isset($descripcion) && isset($id)) {
        include_once('../models/model.php');
        Edit($id, $id_elemento, $nombre, $cantidad, $descripcion);
    }
}
/****delete item****/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($id)) {
        include_once('../models/model.php');
        Delete($id);
    }
}
