<?php 

$id = $_POST['id_empresa'];

header("Location: ../../public/editarEmpresaFormulario.php?id_empresa='$id'");