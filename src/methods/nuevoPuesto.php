<?php   

        include '../config/pdo.php';

        $nombre = $_POST['nombre'];
        
        $sql = "INSERT INTO `puestos` 
        (`id_puesto`,`nombre`) 
        VALUES (NULL,:nombre)";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);                    
            $stmt->execute();
            header('Location: ../../public/puestos/nuevo.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>