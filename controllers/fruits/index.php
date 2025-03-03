<?php



$select = "SELECT * FROM fruits"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE name LIKE :name;"; 
  $params = ["name" => $search_query]; 
}


$fruits = $db->query($select, $params)->fetchAll();

$pageTitle = "Fruits";
require "views/fruits/index.view.php"; 

?>