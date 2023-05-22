<?php

header("Access-Control-Allow-Origin:*");

$dsn = "mysql:host=localhost;dbname=todo;";
$username = "root";
$password = "Ad1Fmin4K.23*.";

try{
    $connection = new PDO($dsn,$username,$password);
}catch(Exception $exception){
    print_r($exception);
}

$id = $_GET['id'];
$status = $_GET['status'];

$sqlQuery = "UPDATE tasks SET status = '$status' WHERE id = $id";

$result = $connection->query($sqlQuery, PDO::FETCH_OBJ);

if($result){
    echo 'El registro se actualizo exitosamente';
    echo $result;
}else{
    echo 'No se pudo actualizar';
}