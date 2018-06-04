<?php include '../src/partials/head.php' ?>

<?php include '../src/components/navbar.php' ?>

<?php 

include '../src/config/pdo.php';

$query = 'SELECT id_empresa, nombre FROM empresas';

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
                        Departamento nuevo
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../src/methods/nuevoDepartamento.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre del departamento</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <?php if($result) { ?>
                            <select class="form-control" name="id_empresa">
                                <?php foreach($result as $data): ?>
                                <option value="<?php echo $data['id_empresa'] ?>">
                                    <?php echo $data['nombre'] ?> </option>
                                <?php endforeach ?>
                            </select>
                            <?php } else {
                                echo '<p>NO HAY DATOS EN LA BASE</p>';
                            }?>
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