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
    <script>
        function eliminar(){
            var respuesta= confirm("Estas seguro de eliminar este registro?");
            return respuesta
        }
    </script>

    <h1 class="text-center p-3">Gestion de servicios</h1>

    <div class="container-fluid row">

        <form class="col-4 p3" method="POST">

            <h3 class="text-center text-secondary">Registro de servicio</h3>
            <?php
            include_once "modelo/conectar.php";
            include_once "controlador/registro_servicio.php";
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
                <label for="exampleInputEmail1" class="form-label">Nuevo tipo de servicio</label>
                <select class="form-select" name="tipo_servicio">
                    <option aria-placeholder="Hola"></option>
                    <option value="Tecnico">Tecnico</option>
                    <option value="Electricista">Electricista</option>
                    <option value="Pintor">Pintor</option>
                    <option value="Carpintero">Carpintero</option>
                    <option value="Plomero">Plomero</option>
                    <option value="Limpieza">Limpieza</option>
                    <option value="Intalador">Intalador</option>
                    <option value="Albañil">Albañil</option>
                    <option value="Gas">Gas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Registrar</button>
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
                        <th scope="col">NUEVO SERVICIO</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include_once "controlador/eliminar_servicio.php";
                    $sql = $conectar->query("SELECT * FROM servicio");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id_servicio ?></td>
                            <td><?= $datos->ubicacion ?></td>
                            <td><?= $datos->descripcion ?></td>
                            <td><?= $datos->objeto_a_reparar ?></td>
                            <td><?= $datos->id_tipo_servicio ?></td>
                            <td><?= $datos->tipo_servicio ?></td>
                            <td>
                                <a href="modificar_servicio.php?id=<?= $datos->id_servicio ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_servicio ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i>Eliminar</a>
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