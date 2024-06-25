<?php
// homwework 3
// Tyler Leight
// cis 222

require_once 'includes/data.php';

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" href="css/cis222-styles.css">
     <title>Homework 3</title>
</head>

<body>

    <?php include 'includes/header.php' ?>
    
    <h2>Menu</h2>
    
    <?php if (file_exists("img/logo/logo.png")) { ?>
    <?php
        echo "<p><img src='img/logo/logo.png?t=".time()."'></p>";
    ?>
    <?php } else { ?>
        <p><img src="img/logo/inf.png"></p>   
    <?php } ?>

    <table>
        <tr>
            <th>Meal</th><th>Name</th><th>Price</th><th>Vegan</th>
        </tr>
        <?php foreach($menu_items as $item) { ?>
        <tr>
            <td><?= $item['meal']?></td>
            <td><?= $item['name']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['vegan']?></td>
        </tr>
        <?php } ?>
    </table>
    
    <?php include 'includes/footer.php' ?>

</body>
       
</html>