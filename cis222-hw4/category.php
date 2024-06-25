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

    <h2>Course Name</h2>
    <table>
    <tr><th>Name</th></tr>
    <?php foreach ($menu_items as $menu_item) { 
        if ($categories[$id]['name']==$categories[$menu_item['category']]['name']) { ?>
            <tr>
                <td><a href="item_detail.php?id=<?= $menu_item['id'] ?>"><?= $menu_item['name'] ?></a></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>


    <?php include 'includes/footer.php' ?>

</body>
</hmtl>