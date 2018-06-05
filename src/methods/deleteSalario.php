<?php
    
    $id =  $_POST['id_salario'];

    include '../config/pdo.php';

        $query = "DELETE FROM salarios WHERE id_salario='$id'";


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->execute();

            header('Location: ../../public/salarios/eliminar.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

?>