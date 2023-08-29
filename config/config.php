<?php

try {
    define("HOST", "localhost");
    define("DBNAME", "lunatravel");
    define("USER", "root");
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER,PASS);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}