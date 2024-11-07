<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conectar->query("DELETE FROM servicio WHERE id_servicio = $id");

    if ($sql) {
        echo '<div class="alert alert-success">Registro eliminado exitosamente</div>';
    }else {
        echo '<div class="alert alert-warning">Error en la eliminacion del registro</div>';
    }

}

?>