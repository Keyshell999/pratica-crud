<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6454b76c85.js" crossorigin="anonymous"></script>
    <title>CRUD en php y mysql</title>

</head>

<body>
    <h1 class="text-center p-3">HOLA</h1>

    <div class="container-fluid row">

        <form class="col-4 p3" method="POST" action="controlador/registro_persona.php">

            <h3 class="text-center text-secondary">Registro de personas</h3>
            <?php
            include "modelo/conectar.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ubicacion</label>
                <input type="text" class="form-control" name="ubicacion">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Objeto a reparar</label>
                <input type="text" class="form-control" name="objeto_a_reparar">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo de servicio</label>
                <select class="select-9" name="id_tipo_servicio">
                    <option value="1">Tecnico</option>
                    <option value="2">Electricista</option>
                    <option value="3">Pintor</option>
                    <option value="4">Carpintero</option>
                    <option value="5">Plomero</option>
                    <option value="6">Limpieza</option>
                    <option value="7">Intalador</option>
                    <option value="8">Albañil</option>
                    <option value="9">Gas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Registrarse</button>
        </form>

        <div class="col-8 p-4">

            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">UBICACION</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">OBJETO A REPARAR</th>
                        <th scope="col">TIPO DE SERVICIO</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody> 
                    <?php
                    include "modelo/conectar.php";
                    $sql = $conectar->query("SELECT * FROM servicio");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_servicio ?></td>
                            <td><?= $datos->ubicacion ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->objeto_a_reparar ?></td>
                            <td><?= $datos->id_tipo_servicio ?></td>
                            <td>
                                <a href="modificar_servicio.php?id=<?= $datos->id_servicio ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash" ></i>Eliminar</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>