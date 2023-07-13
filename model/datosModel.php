
<?php
class datosModel{
    private $PDO;
    private $id_datos_basicos;

    public function __construct()
    {
        require_once(__DIR__ . "/../config/db.php");

        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertarTablaDatosBasicos($cedula, $nombre, $fecha_nacimiento, $direccion, $correo) {
        $statement = $this->PDO->prepare("INSERT INTO datos_basicos (cedula, nombre, fecha_nacimiento, direccion, correo) 
            VALUES (:cedula, :nombre, :fecha_nacimiento, :direccion, :correo)");
        $statement->bindParam(":cedula", $cedula);
        $statement->bindParam(":nombre", $nombre);
        $statement->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $statement->bindParam(":direccion", $direccion);
        $statement->bindParam(":correo", $correo);
        if ($statement->execute()) {
            $id_datos = $this->PDO->lastInsertId();            
            $this->id_datos_basicos = $id_datos;            
            return $id_datos;
        } else {
            return false;
        }
          
    }
    
    public function insertarTablaPersonales($hijos, $hobby, $profesion) {        
        $statement = $this->PDO->prepare("INSERT INTO personales (nro_hijos, hobby, profesion, id_datos_personales) 
            VALUES (:hijos, :hobby, :profesion, :id_datos_personales)");
        $statement->bindParam(":hijos", $hijos);
        $statement->bindParam(":hobby", $hobby);
        $statement->bindParam(":profesion", $profesion);
        $statement->bindParam(":id_datos_personales", $this->id_datos_basicos);
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function verId($id){
        $statement = $this->PDO->prepare("SELECT db.*, p.nro_hijos, p.hobby, p.profesion
        FROM datos_basicos db 
        JOIN personales p  ON db.id_datos_basicos = p.id_datos_personales
        WHERE db.id_datos_basicos = :id");
        $statement->bindParam(":id", $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }

    public function verAll(){
        $statement = $this->PDO->prepare("SELECT db.*, p.nro_hijos, p.hobby, p.profesion
        FROM datos_basicos db 
        JOIN personales p  ON db.id_datos_basicos = p.id_datos_personales");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }

    public function updateTablaDatosBasicos($cedula, $nombre, $fecha_nacimiento, $direccion, $correo, $id_datos_basicos) {
        $statement = $this->PDO->prepare("UPDATE datos_basicos SET cedula = :cedula, nombre = :nombre, fecha_nacimiento = :fecha_nacimiento,
        direccion = :direccion, correo = :correo WHERE id_datos_basicos = :id");        
        $statement->bindParam(":cedula", $cedula);
        $statement->bindParam(":nombre", $nombre);
        $statement->bindParam(":fecha_nacimiento", $fecha_nacimiento);
        $statement->bindParam(":direccion", $direccion);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":id", $id_datos_basicos);
        
        return ($statement->execute()) ? $id_datos_basicos : false;
    }
    
    public function updateTablaPersonales($hijos, $hobby, $profesion, $id_personales) {
        $statement = $this->PDO->prepare("UPDATE personales SET nro_hijos = :hijos, hobby = :hobby, profesion = :profesion 
        WHERE id_personales = :id"); 
        $statement->bindParam(":hijos", $hijos);
        $statement->bindParam(":hobby", $hobby);
        $statement->bindParam(":profesion", $profesion);
        $statement->bindParam(":id", $id_personales);
        
        return ($statement->execute()) ? $id_personales : false;
    }

    public function deleteDatosBasicos($id){       
        $statement = $this->PDO->prepare("DELETE FROM personales WHERE id_datos_personales = :id");        
        $statement->bindParam(":id", $id);           
        return ($statement->execute()) ? $this->deleteDatospersonales($id) : false;
    }

    public function deleteDatospersonales($id){       
        $statement = $this->PDO->prepare("DELETE FROM datos_basicos WHERE id_datos_basicos = :id");        
        $statement->bindParam(":id", $id);           
        return ($statement->execute()) ? true : false;
    }
}