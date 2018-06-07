<?php include '../src/partials/head.php' ?>

<?php include '../src/components/navbar.php' ?>


<div class="container mt-3">
    <div class="row">
        <div class="col col-xs-12 col-md-5 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="display-5">
                        Salario nuevo
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../src/methods/nuevaEmpresa.php">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">monto</label>
                            <input type="text" class="form-control" name="monto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fecha</label>
                            <input type="text" class="form-control" name="fecha">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">rfc</label>
                            <input type="text" class="form-control" name="rfc">
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