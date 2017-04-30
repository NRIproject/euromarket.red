<?php
include ("db.php");
include "product_control.php";
function createSearchtag($name){
    $name = chop($name);
    $name = strtolower($name);
    return $name;
}
$dbTable = (object) array(
    'name' => $_POST['name'],
    'firm' => $_POST['firm'],
    'category' => $_POST['category'],
    'price' => $_POST['price'],
    'description' => $_POST['description'],
    'details' => $_POST['details'],
    'searchtag' => createSearchtag($_POST['name']),
    'stock' => true
);
add_product($db, $dbTable);