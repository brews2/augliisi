<?php

if(isset($_POST["id"])) {
    $sql = "DELETE FROM fruits WHERE id = :id;";
    $params = ["id" => $_POST["id"]];
    $posts = $db->query($sql, $params)->fetchAll();
        

    
    header("Location: /"); 
    exit();
} else{
    redirectIfNotFound();
}
 

$pageTitle = "Dzēšana!";
require "views/fruits/create.view.php";