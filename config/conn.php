<?php
require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";

try{
    $conn=new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    echo 'Tudo ok';

}catch(PDOException $e){
    echo 'Erro de conexão: '.$e->getMessage();
}

?>