<?php
require_once(__DIR__ . "/views/head/head.php");
require_once(__DIR__ . "/controller/datosController.php");
$obj = new datosController();
$rows = $obj->verAll();
?>

<div class="container mb-5">
    <div class="mb-5">
        <h1 class="text-center text-uppercase">Crud</h1>
        <h3>Departemento de tecnologia</h3>
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
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <th scope="row" class="text-center fw-normal"> <?= $row[0] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[1] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[2] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[3] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[4] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[5] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[6] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[7] ?></th>
                            <th scope="row" class="text-center fw-normal"> <?= $row[8] ?></th>
                            <td class="align-middle text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="/crudPHP/views/datos/edit.php?id=<?= $row[0] ?>" class="m-2 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z" />
                                        </svg>
                                    </a>
                                    <a href="/crudPHP/views/datos/show.php?id=<?= $row[0] ?>" class="m-2 text-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                        </svg>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <a href="/crudPHP/views/datos/delete.php?id=<?= $row[0] ?>" class="m-2 text-dark" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="id<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Una vez eliminado no se podra recuperar el registro
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                                    <a href="/crudPHP/views/datos/delete.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="10" class="text-center">No hay registros</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once(__DIR__ . "/views/head/footer.php");
?>