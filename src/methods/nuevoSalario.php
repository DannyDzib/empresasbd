<?php   

        include '../config/pdo.php';

        $monto = $_POST['monto'];
        
        $sql = "INSERT INTO `salarios` 
        (`id_salario`,`monto`) 
        VALUES (NULL,:monto)";


        try {
            $db = new db();
            $db = $db->connect();
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':monto', $monto);                    
            $stmt->execute();
            header('Location: ../../public/salarios/nuevo.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>