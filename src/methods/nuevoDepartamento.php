<?php   

        include '../config/pdo.php';

        $nombre = $_POST['nombre'];
        $id_empresa = $_POST['id_empresa'];
      

        $sql = "INSERT INTO `departamentos` 
        (`id_dep`,`nombre_departamento`, `id_empresa`) 
        VALUES (NULL, :nombre, :id_empresa)";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':id_empresa', $id_empresa);
            $stmt->execute(); 

            header('Location: ../../public/departamentos/nuevo.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>