<?php include '../../src/partials/head.php' ?>

<?php include '../../src/components/navbar.php' ?>


<div class="container mt-3">
    <div class="row">
        <div class="col col-xs-12 col-md-5 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="display-5">
                        Puesto Nuevo
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../../src/methods/nuevoPuesto.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Puesto</label>
                            <input type="text" class="form-control" name="nombre">
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
