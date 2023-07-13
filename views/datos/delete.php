<?php
require_once(__DIR__ . "/../../controller/datosController.php");
$obj = new datosController();
$obj->delete($_GET['id']); 
