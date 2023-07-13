<?php

class datosController{
    private $model;

    public function __construct()
    {        
        require_once(__DIR__ . "/../model/datosModel.php");
        $this->model = new datosModel();
    }

    public function guardar($cedula, $nombre, $fecha_nacimiento, $direccion, $correo, $hijos, $hobby, $profesion){
        $idDatosBasico = $this->model->insertarTablaDatosBasicos($cedula, $nombre, $fecha_nacimiento, $direccion, $correo);
        $idpersonales = $this->model->insertarTablaPersonales($hijos, $hobby, $profesion);
        return ($idDatosBasico && $idpersonales != false) ?  header("Location:show.php?id=".$idDatosBasico) : header("Location:create.php");
    }

    public function verId($id){
        return ($this->model->verId($id) != false) ? $this->model->verId($id) : header("Location:/../crudPHP/index.php");
    }

    public function verAll(){
        return ($this->model->verAll() != false) ? $this->model->verAll() : false;
    }

    public function update($cedula, $nombre, $fecha_nacimiento, $direccion, $correo, $hijos, $hobby, $profesion, $id){
        $idDatosBasico = $this->model->updateTablaDatosBasicos($cedula, $nombre, $fecha_nacimiento, $direccion, $correo, $id);
        $idpersonales = $this->model->updateTablaPersonales($hijos, $hobby, $profesion, $id);
        return ($idDatosBasico && $idpersonales != false) ?  header("Location:show.php?id=".$idDatosBasico) : header("Location:edit.php");
    }

    public function delete($id){
        return $this->model->deleteDatosBasicos($id) ? header("Location:/../crudPHP/index.php") : header("Location:show.php?id=".$id);
    }
}