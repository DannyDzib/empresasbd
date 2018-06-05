<?php
    
    $id =  $_POST['id_puesto'];

    include '../config/pdo.php';

        $query = "DELETE FROM puestos WHERE id_puesto='$id'";


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->execute();

            header('Location: ../../public/puestos/puestos.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

?>