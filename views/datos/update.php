<?php
require_once(__DIR__ . "/../../controller/datosController.php");
$obj = new datosController();
$obj->update($_POST['cedula'], $_POST['nombre'], $_POST['nacimiento'], $_POST['direccion'], $_POST['correo'], $_POST['hijos'], 
$_POST['hobby'], $_POST['profesion'], $_POST['id']);