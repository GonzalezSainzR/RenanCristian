<?php
require_once(__DIR__. "/Database.php");
session_start();  

session_regenerate_id(true);

$path = "/RenanCristian/";
   //BELOW IS the information of the database
$host = "localhost" ;
//thats pretty much it
$username = "root";

$password = "root";

$database = "renancristian_db";

if(!isset($_SESSION["connection"])){
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}

