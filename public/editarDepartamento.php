<?php include '../src/partials/head.php' ?>

<?php include '../src/components/navbar.php' ?>


<?php 

    include '../src/config/pdo.php';

    $query = 'SELECT id_dep, nombre_departamento FROM departamentos';

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
                        Empresas
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../src/methods/editarDepartamento.php" method="post">

                        <div class="form-group">
                            <?php if($result) { ?>
                                <select class="form-control" name="id_dep">
                            <?php foreach($result as $data): ?>
                                <option value="<?php echo $data['id_dep'] ?>"> <?php echo $data['nombre_departamento'] ?> </option>
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