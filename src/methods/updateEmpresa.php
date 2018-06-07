<?php   

        include '../config/pdo.php';

        $id = $_POST['id_empresa'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $sql = "UPDATE empresas SET
				nombre 	= :nombre,
				direccion = :direccion,
                telefono = :telefono,
                correo	= :correo
			WHERE id_empresa = $id";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute(); 

            header('Location: ../../public/empresas/editar.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>