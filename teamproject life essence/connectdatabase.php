<?php

//connecting time !
$db_host = 'localhost';
$db_name = 'u_220192145_aproject';
$username = 'u-220192145';
$password = '020Z2XvJGO02ikG';

try {
    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password);
} catch (PDOException $ex) {
    echo("Failed to connect to database.;<br>");
    echo($ex->getMessage());
    exit;
}
?>