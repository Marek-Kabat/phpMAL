<?php
$servername = "127.0.0.1:3306";
$username = "marekkabat";
$password = "outdated";
$database = "marekkabat";


//MYSQLI - MYSQL Improved
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
//    echo "Database connect successful. <br>";
}


//PDO VERZE
//    try{
//        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Funguje";
//    }catch(PDOException $x){
//        echo "SpojenÃ­ nefunguje" . $x->getMessage();
//    }
?>













