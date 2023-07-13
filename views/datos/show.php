<?php
require_once(__DIR__ . "/../head/head.php");
require_once(__DIR__ . "/../../controller/datosController.php");
$obj = new datosController();
$date = $obj->verId($_GET['id']);
?>

<div class="container">
    <div class="mb-5">
        <h1 class="text-center text-uppercase">Detalles de Usuario</h1>
    </div>

    <div>
        <table class="table table-striped custom-table">
            <tr>
                <th scope="col" class="text-center">Id</th>
                <th scope="col" class="text-center">Cedula</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Fecha de Nacimiento</th>
                <th scope="col" class="text-center">Direccion</th>
                <th scope="col" class="text-center">Correo</th>
                <th scope="col" class="text-center">Nro Hijos</th>
                <th scope="col" class="text-center">Hobby</th>
                <th scope="col" class="text-center">Profesion</th>
                <th scope="col" class="text-center">Opciones</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col" class="text-center"><?= $date[0] ?></td>
                    <td scope="col" class="text-center"><?= $date[1] ?></td>
                    <td scope="col" class="text-center"><?= $date[2] ?></td>
                    <td scope="col" class="text-center"><?= $date[3] ?></td>
                    <td scope="col" class="text-center"><?= $date[4] ?></td>
                    <td scope="col" class="text-center"><?= $date[5] ?></td>
                    <td scope="col" class="text-center"><?= $date[6] ?></td>
                    <td scope="col" class="text-center"><?= $date[7] ?></td>
                    <td scope="col" class="text-center"><?= $date[8] ?></td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            <a href="/crudPHP/views/datos/edit.php?id=<?= $date[0] ?>" class="m-2 text-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                </svg>
                            </a>
                            <!-- Button trigger modal -->
                            <a href="" class="m-2 text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Una vez eliminado no se podra recuperar el registro!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger" href="delete.php?id=<?= $date[0] ?>">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-12">
        <a href="/crudPHP/index.php" class="btn btn-danger" type="submit">Atras</a>
    </div>
</div>
<script src="/../crudPHP/util/js/validacion.js"></script>


<?php
require_once(__DIR__ . "/../head/footer.php");
?>