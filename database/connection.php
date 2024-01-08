<?php
$hostname = "localhost";
$username = "id21537042_form";
$password = "Ecommerce@12345";
$db = "id21537042_cristopher";

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Connection Failed!: " .$e->getMessage();
}
?>