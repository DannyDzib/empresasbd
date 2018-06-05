<?php   

        include '../config/pdo.php';

        $id = $_POST['id_puesto'];
        $nombre = $_POST['nombre'];
       

        $sql = "UPDATE puestos SET
				nombre 	= :nombre,
				
			WHERE id_puesto = $id";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
          
            $stmt->execute(); 

            header('Location: ../../public/empresas/editar.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>