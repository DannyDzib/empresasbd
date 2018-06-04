<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>


<?php 

    include '../../src/config/pdo.php';

    $query = 'SELECT * FROM empresas';

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
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Télefono</th>
                                <th scope="col">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($result): ?>
                            <?php foreach($result as $data): ?>
                            <tr>
                                <th scope="row"><?php echo $data['id_empresa'] ?></th>
                                <td><?php echo $data['nombre'] ?></td>
                                <td><?php echo $data['direccion'] ?></td>
                                <td><?php echo $data['telefono'] ?></td>
                                <td><?php echo $data['correo'] ?></td>
                            </tr>
                            <?php endforeach ?>
                            <?php endif ?>

                            <?php if(!$result): ?>
                            <tr style="text-align: center;">
                                <th colspan="5" scope="row">TABLA VACÍA</th>
                            </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>