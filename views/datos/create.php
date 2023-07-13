<?php
require_once(__DIR__ . "../../head/head.php");
?>

<div class="container mb-5">
    <div class="mb-5">
        <h1 class="text-center text-uppercase">Crear usuario</h1>
    </div>

    <div>
        <form id="formId" class="row g-3 border p-5" action="store.php" method="POST">
            <fieldset class="row g-3 border p-2">
                <legend> <b>Informacion Personal</b></legend>
                <div class="col-md-4">
                    <label class="form-label">Cedula</label>
                    <input type="tel" class="form-control" id="" name="cedula" placeholder="Ingrese un numero de cedula" value="" >

                </div>
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="" name="nombre" placeholder="Ingrese un nombre" value="" >

                </div>
                <div class="col-md-4">
                    <label class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="" name="nacimiento" value="" >
                </div>
                <div class="col-md-4">
                    <label class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="" name="direccion" placeholder="Ingrese una direccion" value="" >
                </div>
                <div class="col-md-4">
                    <label class="form-label">Correo Electronico</label>
                    <input type="text" class="form-control" id="" name="correo" placeholder="Ingrese un correo electronico" value="" >
                </div>
            </fieldset>

            <fieldset class="row g-3 border p-2">
                <legend> <b>Informacion Adicional</b></legend>
                <div class="col-md-4">
                    <label class="form-label">Numero de Hijos</label>
                    <input type="tel" class="form-control" id="" name="hijos" placeholder="Ingrese valor" value="" >

                </div>
                <div class="col-md-4">
                    <label class="form-label">Hobby</label>
                    <input type="text" class="form-control" id="" name="hobby" placeholder="Ingrese un hobby" value="" >

                </div>
                <div class="col-md-4">
                    <label class="form-label">Profesion</label>
                    <input type="text" class="form-control" id="" name="profesion" placeholder="Ingrese una profesion" value="" >
                </div>
            </fieldset>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>  
        <script src="/util/js/validacion.js"></script>      
    </div>
</div>

<?php
require_once(__DIR__ . "../../head/footer.php");
?>

