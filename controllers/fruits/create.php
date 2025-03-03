<?php

require "Validator.php";

$sql = "SELECT * FROM fruits";
$params = [];
$fruits = $db->query($sql, $params)->fetchAll();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = [];

    if(!Validator::string($_POST["name"], max: 40)){
        $errors["name"] = "Izmanto vismaz 2 simbolus un ne vairak par 40! 💋";
    }
    elseif(empty($errors)){
        $sql = "INSERT INTO fruits (name) VALUES (:name)";
        $params = ["name" => $_POST["name"],];
        $fruits = $db->query($sql, $params)->fetchAll();
        header("Location: /"); 
        exit();
    }
 

}


$pageTitle = "izveido";
require "views/fruits/create.view.php";