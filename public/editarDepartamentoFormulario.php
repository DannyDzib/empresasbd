<?php include '../src/partials/head.php' ?>

<?php include '../src/components/navbar.php' ?>
<?php 

include '../src/config/pdo.php';

$id = $_REQUEST['id_dep'];


$query = "SELECT * FROM departamentos WHERE id_dep=$id";

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
                        Editar: <?php echo $result['nombre_departamento']; ?>
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../src/methods/updateDepartamento.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre del departamento</label>
                            <input type="hidden" value=" <?php echo $result['id_dep']; ?>" class="form-control" name="id_dep">
                            <input type="text" value=" <?php echo $result['nombre_departamento']; ?>" class="form-control" name="nombre">
                        </div>
                        
                        <div class="form-group">

                            <?php 
                                $query = "SELECT 
                                    id_empresa, 
                                    nombre FROM empresas 
                                    order by id_empresa=$id";

                                try {
                                    $db = new db();
                                    $db = $db->connect();
                                    $ejecutar = $db->query($query);
                                    $empresa = $ejecutar->fetchAll();
                                    $db = null;
                            
                                } catch(PDOException $e) {
                                    echo $e->getMessage();
                                }
                            ?>
                            <label for="exampleFormControlSelect1">Empresa</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <?php foreach ($empresa as $value) : ?>
                                <option value="<?php echo $value['id_empresa'];?>"> 
                                    <?php echo $value['nombre']; ?> 
                                </option>
                                <?php endforeach ?>
                            </select>


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