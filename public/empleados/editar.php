
<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>


<?php 

    include '../../src/config/pdo.php';

    $id = $_REQUEST['id_rfc'];
    $query = "SELECT rfc, nombre FROM empleados WHERE rfc=$id";

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
                    <form action="../../src/methods/editarPuesto.php" method="post">

                        <div class="form-group">
                            <?php if($result) { ?>
                                <select class="form-control" name="rfc">
                            <?php foreach($result as $data): ?>
                                <option value="<?php echo $data['rfc'] ?>"> <?php echo $data['rfc'] ?> </option>
                            <?php endforeach ?>
                            </select>
                            <?php } else {
                                echo '<p>NO HAY DATOS EN LA BASE</p>';
                            }?>
                        </div>


                        <?php if($result) { ?>

                        <button type="submit" class="btn btn-success">
                            Editar
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