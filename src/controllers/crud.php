<?php
include("src/views/depot.php");
/****create new user****/
if (isset($_POST['crearUsuario'])) {
    $nombre = $_POST['nombreC'];
    $correo = $_POST['correoC'];
    $login =  $_POST['loginC'];
    if (isset($nombre) && isset($correo) && isset($login)) {
        Agregar($id_elemento, $imagen, $nombre, $cantidad, $descripcion);
    }
}
/****update user****/
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $login = $_POST['login'];
    if (isset($nombre) && isset($correo) && isset($login) && isset($id)) {
        include_once('../model/models.php');
        Editar($id, $id_elemento, $imagen, $nombre, $cantidad, $descripcion);
    }
}
/****delete user****/
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($id)) {
        include_once('../model/models.php');
        Eliminar($id);
    }
}
?>
