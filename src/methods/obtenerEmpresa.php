<?php   

        include '../config/pdo.php';

        $query = 'SELECT id_empresa, nombre FROM empresas';


        try {
            $db = new db();
            $db = $db->connect();
            $ejecutar = $db->query($query);
            $result = $ejecutar->fetchAll();
            $db = null;

            var_dump($result);

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        

?>