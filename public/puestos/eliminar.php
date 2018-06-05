<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>


<?php 

include '../../src/config/pdo.php';

$query = 'SELECT id_puesto, nombre FROM puestos';

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
        <div class="col col-xs-12 col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4 class="display-5">
                        Puesto
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../../src/methods/deletePuesto.php" method="POST">

                       <div class="form-group">
                            <?php if($result) { ?>
                                <select class="form-control" name="id_puesto">
                            <?php foreach($result as $data): ?>
                                <option value="<?php echo $data['id_puesto'] ?>"> <?php echo $data['nombre'] ?> </option>
                            <?php endforeach ?>
                            </select>
                            <?php } else {
                                echo '<p>NO HAY DATOS EN LA BASE</p>';
                            }?>
                        </div>



                        <?php if($result) { ?>

                        <button type="submit" class="btn btn-danger">
                            Eliminar
                        </button>

                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>