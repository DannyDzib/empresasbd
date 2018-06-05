<?php
    
    $id =  $_POST['id_dep'];

    include '../config/pdo.php';

        $query = "DELETE FROM departamentos WHERE id_dep='$id'";


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->execute();

            header('Location: ../../public/departamentos/departamentos.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

?>