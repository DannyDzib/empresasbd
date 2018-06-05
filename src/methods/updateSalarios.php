<?php   

        include '../config/pdo.php';

        $monto = $_POST['monto'];

        $sql = "UPDATE salarios SET
				monto = :monto,
			WHERE id_salario = $id";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':monto', $monto);
            $stmt->execute(); 

            header('Location: ../../public/salarios/editar.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>