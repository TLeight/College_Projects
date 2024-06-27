<?php
// homwework 4
// Tyler Leight
// cis 222
include 'includes/sessions.php';
require_once 'includes/menu-items.php';
require_once 'includes/categories.php';


if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" href="css/cis222-styles.css">
     <title>Homework 4</title>
</head>

<body>
    <?php include 'includes/header.php' ?>

    <h2>Menu Details</h2>
    <h3><?= $menu_items[$id]['name'] ?> from the <?= $categories[$menu_items[$id]['category']]['name'] ?> Selection </h3>
    <h3>Price: <?= $menu_items[$id]['price'] ?> </h3>
    <h3>Vegan: <?= $menu_items[$id]['vegan'] ?> </h3>

    <?php include 'includes/footer.php' ?>

</body>
</hmtl>