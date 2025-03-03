<?php
require "Validator.php";

if(isset($_GET["id"])){
    $sql = "SELECT * FROM fruits WHERE id = :id";
    $params = ["id" => $_GET["id"]];
    $fruits = $db->query($sql, $params)->fetch();
}
   
   
   if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $errors = []; 
        if(!Validator::string($_POST["name"], max: 40)){
            $errors["name"] = "Neder! Vismaz 2 simboli un ne vairak par 40!";
        }
        elseif(empty($errors)){
            $sql = "UPDATE fruits SET name = :name WHERE id = :id;";
            $params = ["id" => $_POST["id"], "name" => $_POST["name"]];
            $fruits = $db->query($sql, $params)->fetchAll();
            header("Location: /show?id=" . $_POST["id"]); 
            exit();
        }      
        
    }

    

require "views/fruits/edit.view.php";