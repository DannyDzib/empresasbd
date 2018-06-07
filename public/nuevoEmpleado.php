<?php include '../src/partials/head.php' ?>

<?php include '../src/components/navbar.php' ?>


<div class="container mt-3">
    <div class="row">
        <div class="col col-xs-12 col-md-5 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="display-5">
                        Nuevo empleado
                    </h4>
                </div>
                <div class="card-body">
                    <form autocomplete="off" method="POST" action="../src/methods/nuevaEmpresa.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">rfc</label>
                            <input type="text" class="form-control" name="rfc">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Edad</label>
                            <input type="text" class="form-control" name="edad">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id Puesto</label>
                            <input type="text" class="form-control" name="id_puesto">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id Empresa</label>
                            <input type="text" class="form-control" name="id_empresa">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Id Departamento</label>
                            <input type="text" class="form-control" name="id_departamento">
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