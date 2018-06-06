<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>

<?php 

include '../../src/config/pdo.php';

$query = 'SELECT rfc, nombre,apellido FROM empleados';

try {
    $db = new db();
    $db = $db->connect();
    $ejecutar = $db->query($query);
    $result = $ejecutar->fetchAll();
    $db = null;

} catch(PDOException $e) {
    echo $e->getMessage();
}

?>


<div class="container mt-3">
    <div class="row">
        <div class="col col-xs-12 col-md-5 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="display-5">
                        Salario Nuevo
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../../src/methods/nuevoSalario.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salario</label>
                            <input type="text" class="form-control" name="monto">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>