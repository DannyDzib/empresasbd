<?php 

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$prefix = '/api/v1';

/////////////////////////////////////
////////////////////////////////////
//-------USERS DATA ENPOINTS------//
///////////////////////////////////
//////////////////////////////////

$app->get('/departamentos', function(Request $request, Response $response){
    $query = 'SELECT * FROM departamentos';

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        //echo $test; 
        echo json_encode($result);

    } catch(PDOException $e) {
        echo '{ "error": "message": "'.$e->getMessage().'"}';
    }
    
});
$app->get('/empleados', function(Request $request, Response $response){
    $query = 'SELECT * FROM empleados';

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        //echo $test; 
        echo json_encode($result);

    } catch(PDOException $e) {
        echo '{ "error": "message": "'.$e->getMessage().'"}';
    }
    
});
$app->get('/empresas', function(Request $request, Response $response){
    $query = 'SELECT * FROM empresas';

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        //echo $test; 
        echo json_encode($result);

    } catch(PDOException $e) {
        echo '{ "error": "message": "'.$e->getMessage().'"}';
    }
    
});
$app->get('/puestos', function(Request $request, Response $response){
    $query = 'SELECT * FROM puestos';

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        //echo $test; 
        echo json_encode($result);

    } catch(PDOException $e) {
        echo '{ "error": "message": "'.$e->getMessage().'"}';
    }
    
});
$app->get('/salarios', function(Request $request, Response $response){
    $query = 'SELECT * FROM salarios';

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        //echo $test; 
        echo json_encode($result);

    } catch(PDOException $e) {
        echo '{ "error": "message": "'.$e->getMessage().'"}';
    }
    
});


$app->get($prefixv2.'/users/{id}', function(Request $request, Response $response) {

    $id = $request->getAttribute('id');

    $query = "SELECT * FROM users WHERE id='$id'";

    try {
        $db = new db();
        $db = $db->connect();
        $ejecutar = $db->query($query);
        $result = $ejecutar->fetch(PDO::FETCH_ASSOC);
        $db = null;
        //echo $test; 

        $res = array(
            "id" => $result["id"],
            "name" => $result["firstName"],
            "last_name" => $result["lastName"],
            "email" => $result["email"]
        );

        

        echo json_encode($res);

    } catch(PDOException $e) {
        echo '
            { "error": "message": "'.$e->getMessage().'"}';
    }
    
});
