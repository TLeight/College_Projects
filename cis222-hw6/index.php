<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
// use the following database procedure (see textbook pages 446-447 for a similar approach)
// define a character string $sql that contains SQL to get all rows/columns from the menuitem table
// issue the query using that query string and assign the returned PDOStatement object to $statement
// issue $statement's fetchall() function and store the returned result set in $rows
// begin updates (approx 3 lines)
$sql = "SELECT menuitem.menuitem_id, menuitem.name as menuitem_name, category.category_id, category.name as category_name, 
        menuitem.price, menuitem.picture_file FROM menuitem JOIN category ON menuitem.category_id = category.category_id";
$statement = $DBH->query($sql);
$combined = $statement->fetchall();
// end updates
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        <table>
            <tr><th colspan="4">Menu</th></tr>
            <tr><th>Name</th><th>Category</th><th class="num">Price</th><th>Detail</th></tr>
            <!--
                Within a one-line php section, start a foreach loop to go through each of $rows's rows, which will be stored in $row 
                Within the loop define an HTML row which will end up having four elements.
                But before that set of <td>s, create a php section inside the PHP, 
                define $sql and assign to it a string/query that gets the 
                name column from the category table where the category_id is equal to $row[category_id].
                Returning to HTML, code the four table columns. Except for the third column, the contents
                of the <td>s are query strings (<a> elements):
                1- invoke item_detail.php passing the menuitem_id in $row. Display the name in $row
                2- invoke category.php passing the category_id in $row. Display the name in $category
                3- display the value of the price in $row
                4- same as (1), but instead of displaying the name, display the image, whose name is stored at the picture_file key of $row.
                   remember to prepend the upload path to the file name.
                Finish the row and the php section for the foreach loop
            Begin updates (approx 13 lines) -->
        <?php foreach($combined as $row) { ?>
        <?php $sql = "SELECT name FROM category WHERE category_id = $row[category_id]"?>
        <td><a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><?= html_escape($row['menuitem_name']) ?></a></td>
        <td><a href="category.php?id=<?= $row['category_id'] ?>"> <?= html_escape($row['category_name']) ?></td>
        <td class='numb'>$<?=number_format(html_escape($row['price'],2))?></td>
        <td><a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><img class = "detail" src="<?= $upload_path . $row['picture_file']?>"></a></td>
        </tr>
        <?php } ?>
            <!-- end updates -->
        </table>
    <?php include 'includes/footer.php'; ?>
</html>