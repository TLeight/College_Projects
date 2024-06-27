<?php
// homwework 4
// Tyler Leight
// cis 222
include 'includes/sessions.php';
require_once 'includes/menu-items.php';
require_once 'includes/categories.php';
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
    
    <h2>Menu</h2>

    <table>
        <tr>
            <th>Name</th><th>Category</th><th>Price</th>
        </tr>
        <?php foreach($menu_items as $item) { ?>
        <tr>
        <td><a href="item_detail.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a></td>
        <td><a href="category.php?id=<?= $item['category'] ?>"> <?= $categories[$item['category']]['name'] ?></td>
        <td class='numb'>$<?=number_format($item['price'],2)?></td>
        </tr>
        <?php } ?>
    </table>
    
    <?php include 'includes/footer.php' ?>

</body>
       
</html>