<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>


<?php 

include '../../src/config/pdo.php';

$id = $_REQUEST['id_salario'];


$query = "SELECT * FROM salarios WHERE id_salario = $id";

try {
    $db = new db();
    $db = $db->connect();
    $ejecutar = $db->query($query);
    $result = $ejecutar->fetch();
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
                        Editar: <?php echo '<h4> '. $result['monto'] .' </h4>'; ?>
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../../src/methods/updateSalarios.php">
                      
                        <div class="form-group">
                            <label for="exampleInputEmail1">Salario</label>
                            <input type="text" value="<?php echo $result['monto']?>" class="form-control" name="monto">

                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>