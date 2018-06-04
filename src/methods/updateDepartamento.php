<?php   

        include '../config/pdo.php';

        $id = $_POST['id_dep'];
        $nombre = $_POST['nombre'];

        $sql = "UPDATE departamentos 
                SET nombre_departamento = :nombre 
                WHERE id_dep = $id";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute(); 
            $db = null;

            header('Location: ../../public/editarDepartamento.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>