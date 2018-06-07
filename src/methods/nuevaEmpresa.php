<?php   

        include '../config/pdo.php';

        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $sql = "INSERT INTO `empresas` 
        (`id_empresa`, `nombre`, `direccion`, `telefono`, `correo`) 
        VALUES (NULL, :nombre, :direccion, :telefono, :correo)";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':direccion', $direccion);
            $stmt->bindParam(':telefono', $telefono);
            $stmt->bindParam(':correo', $correo);
            $stmt->execute(); 

            header('Location: ../../public/empresas/nueva.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>