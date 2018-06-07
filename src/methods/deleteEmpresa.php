<?php
    
    $id =  $_POST['id_empresa'];

    include '../config/pdo.php';

        $query = "DELETE FROM empresas WHERE id_empresa='$id'";


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->execute();

            header('Location: ../../public/empresas/empresas.php');

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

?>