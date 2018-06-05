<?php include '../src/partials/head.php' ?>


<div class="jumbotron">
    <h1 class="display-5">Administración de empresas</h1>

    <div class="bd-example">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresas</button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a class="dropdown-item" href="./empresas/nueva.php">Añadir</a>
                <a class="dropdown-item" href="./empresas/editar.php">Editar</a>
                <a class="dropdown-item" href="./empresas/eliminar.php">Eliminar</a>
                <a class="dropdown-item" href="./empresas/empresas.php">Ver todos los datos</a>
            </div>
        </div>
        <!-- /btn-group -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Departamentos</button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a class="dropdown-item" href="./departamentos/nuevo.php">Añadir</a>
                <a class="dropdown-item" href="./departamentos/editar.php">Editar</a>
                <a class="dropdown-item" href="./departamentos/eliminar.php">Eliminar</a>
                <a class="dropdown-item" href="./departamentos/departamentos.php">Ver todos los Datos</a>
            </div>
        </div>
        <!-- /btn-group -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empleados</button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a class="dropdown-item" href="./empleados/nuevo.php">Añadir</a>
                <a class="dropdown-item" href="./empleados/editar.php">Editar</a>
                <a class="dropdown-item" href="./empleados/eliminar.php">Eliminar</a>
                <a class="dropdown-item" href="./empleados/empleados.php">Ver todos los Datos</a>
            </div>
        </div>
        <!-- /btn-group -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salarios</button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a class="dropdown-item" href="./salarios/nuevo.php">Añadir</a>
                <a class="dropdown-item" href="./salarios/editar.php">Editar</a>
                <a class="dropdown-item" href="./salarios/eliminar.php">Eliminar</a>
                <a class="dropdown-item" href="./salarios/salarios.php">Ver todos los datos</a>
            </div>
        </div>
        <!-- /btn-group -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Puestos</button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a class="dropdown-item" href="./puestos/nuevo.php">Añadir</a>
                <a class="dropdown-item" href="./puestos/editar.php">Editar</a>
                <a class="dropdown-item" href="./puestos/eliminar.php">Eliminar</a>
                <a class="dropdown-item" href="./puestos/puestos.php">Ver todos los Datos</a>
            </div>
        </div>
        <!-- /btn-group -->
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
</body>

</html>