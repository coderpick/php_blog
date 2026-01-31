<?php
include_once "config.php";
try{  

    $dns = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
    $conn = new PDO($dns, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //  echo "✅ Connected Successfully!";

}catch(PDOException $e){
    echo $e->getMessage();
}