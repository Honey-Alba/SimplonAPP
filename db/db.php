<?php
/*$serverName = "localhost"; 
$DBUsername = "root";
$DBPassword = "";
$DBName = "simplon";*/

$serverName = "eu-cdbr-west-03.cleardb.net"; 
$DBUsername = "b561a32140c36b";
$DBPassword = "3c4742a1";
$DBName = "heroku_741911620e198dd";

try {
    $connex = new PDO("mysql:host=$serverName;dbname=$DBName", $DBUsername, $DBPassword);
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "la connexion a echoué:" . $e->getMessage();
}
?>