<?php
require_once(__DIR__ . "../../head/head.php");
require_once(__DIR__ . "/../../controller/datosController.php");
$obj = new datosController();
$date = $obj->verId($_GET['id']);
$data = $date[3]; 
$dateFormatted = date("Y-m-d", strtotime($data));
?>

<div class="container mb-5">
    <div class="mb-5">
        <h1 class="text-center text-uppercase">Actualizar usuario</h1>
    </div>

    <div >
        <form class="row g-3 border p-5" action="update.php" method="POST">
            <fieldset class="row g-3 border p-2">
                <legend> <b>Informacion Personal</b></legend>
                <div class="col-md-4">
                    <label class="form-label">Id</label>
                    <input readonly type="tel" class="form-control" id="" name="id" value="<?php echo $date[0] ?>" required>

                </div>
                <div class="col-md-4">
                    <label class="form-label">Cedula</label>
                    <input readonly type="tel" class="form-control" id="" name="cedula" placeholder="Ingrese un numero de cedula" value="<?= $date[1] ?>" required>

                </div>
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input readonly type="text" class="form-control" id="" name="nombre" placeholder="Ingrese un nombre" value="<?= $date[2] ?>" required>

                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="" name="nacimiento" value="<?php echo $dateFormatted; ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="" name="direccion" placeholder="Ingrese una direccion" value="<?= $date[4] ?>" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="" name="correo" placeholder="Ingrese un correo electronico" value="<?= $date[5] ?>" required>
                </div>
            </fieldset>

            <fieldset class="row g-3 border p-2">
                <legend> <b>Informacion Adicional</b></legend>
                <div class="col-md-4">
                    <label class="form-label">Numero de Hijos</label>
                    <input type="tel" class="form-control" id="" name="hijos" placeholder="Ingrese valor" value="<?= $date[6] ?>" required>

                </div>
                <div class="col-md-4">
                    <label class="form-label">Hobby</label>
                    <input type="text" class="form-control" id="" name="hobby" placeholder="Ingrese un hobby" value="<?= $date[7] ?>" required>

                </div>                
                <div class="col-md-4">
                    <label class="form-label">Profesion</label>
                    <input type="text" class="form-control" id="" name="profesion" placeholder="Ingrese una profesion" value="<?= $date[8] ?>" required>
                </div>                
            </fieldset>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Actualizar</button>
                <a href="/crudPHP/index.php" class="btn btn-danger" type="submit">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php
require_once(__DIR__ . "../../head/head.php");
?>