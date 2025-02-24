<?php

//Mērķis: drošība un kods īsāks

$select = "SELECT * FROM fruits"; 
$params = [];

if  (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
  //ja kaut kas tiek meklēts tad secelct izpilda vaicājumu
  $search_query = "%" . $_GET["search_query"] . "%";
  $select .= " WHERE name LIKE :name;"; //sagatavotais vaicājums
  $params = ["name" => $search_query]; //saistītais parametrs
}

// Pie new Database izpildās konstrukotrs
$fruits = $db->query($select, $params)->fetchAll();//metode atgriež asoc masīvu ar datiem

$pageTitle = "Augļi";
require "views/fruits/index.view.php"; //pēdējā rinda lai visi mainīgie eksitētu

?>