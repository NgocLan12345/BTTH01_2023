<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "btth01_cse485";

try {                      
    $conn = new PDO('msql:host = localhost; dbname=btth01_cse485', $username, $password);                                                    
} catch (PDOException $e) {                                         
    throw new PDOException($e->getMessage(), $e->getCode());       
}

?>

