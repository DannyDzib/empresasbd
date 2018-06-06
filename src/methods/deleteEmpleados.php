<?php
    
    $id =  $_POST['rfc'];

    include '../config/pdo.php';

        $query = "DELETE FROM empleados WHERE rfc='$id'";


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->execute();

            header('Location: ../../public/empleados/eliminar.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

?>