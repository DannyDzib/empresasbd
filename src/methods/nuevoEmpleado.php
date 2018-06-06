<?php   

        include '../config/pdo.php';

        $rfc = $_POST['rfc'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];        
        $id_puesto = $_POST['id_puesto'];
        $id_salario = $_POST['id_salario'];
        $id_empresa = $_POST['id_empresa'];
        $id_departamento = $_POST['id_departamento'];

        $sql = "INSERT INTO `empleados` 
        (`rfc` ,`nombre`, `apellido`, `edad`,`id_puesto`,`id_salario`,`id_empresa`,`id_departamento`) 
        VALUES (:rfc, :nombre,:apellido, :edad,:id_puesto, :id_salario,:id_empresa,:id_departamento)";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':rfc', $rfc);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':id_puesto', $id_puesto);
            $stmt->bindParam(':id_salario', $id_salario);
            $stmt->bindParam(':id_empresa', $id_empresa);
            $stmt->bindParam(':id_departamento', $id_departamento);
            $stmt->execute(); 

            header('Location: ../../public/empleados/nueva.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
