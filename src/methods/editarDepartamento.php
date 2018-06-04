<?php 

$id = $_POST['id_dep'];
$id_empresa = $_POST['id_empresa'];

header("Location: ../../public/departamentos/editando.php?id_dep=$id&id_empresa=$id_empresa");

