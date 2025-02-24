<?php

require "Validator.php";

$sql = "SELECT * FROM fruits";
$params = [];
$fruits = $db->query($sql, $params)->fetchAll();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if(!Validator::string($_POST["name"], max: 40)){
        $errors["name"] = "Izmantojies no 2 - 40 rakstzīmēm! 🙏";
    }
    elseif(empty($errors)){
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        $params = ["name" => $_POST["name"],];
        $fruits = $db->query($sql, $params)->fetchAll();
        header("Location: /"); 
        exit();
    }
 

}


$pageTitle = "Izveido augli!";
require "views/fruits/create.view.php";