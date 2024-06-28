<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
// Assign to $id the value at $_GET's 'id' key
// Create $sql to get the name from the category table, where category_id = :category_id
// (use the prepare/execute method form textbook page 448-449)
// Call the prepare() method, passing it $sql, and storing the result in $statement
// In the execute method, set category_id placeholder to $id
// Call the $statement fetch() method, storing result in $categoryName 
// Using a similar procedure, create $sql to get menuitem_id, name, description, and picture file from the menuitem table, where category_id = :category_id
// Issue the query with the prepare() method and store the result in $statement
// In the execute method, set category_id placeholder to $id
// Issue the $statement fetchAll() method, storing the result in $rows
// begin updates (approx 10 lines)

$id = $_GET['id'];
$sql = "SELECT category.name FROM category WHERE category_id = :category_id";
$statement = $DBH->prepare($sql);
$statement->execute(['category_id' => $id]);
$categoryName = $statement->fetch();

$sql = "SELECT menuitem.menuitem_id, menuitem.name as menuitem_name, menuitem.description as menuitem_description, menuitem.picture_file
        FROM menuitem WHERE category_id = :category_id";
$statement = $DBH->prepare($sql);
$statement->execute(['category_id' => $id]);
$rows = $statement->fetchAll();
// end updates
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        <div class="sections">
            <!-- display (h2) the name field from the $categoryName array -->
            <!-- create a table --> 
            <!-- create a heading row (see screen shot) --> 
            <!-- Using a one-line php section, code a foreach loop, using $rows and $row -->
            <!-- create a row --> 
            <!-- at this point, provide values for three columns of the table row -->
            <!-- column 1 is a query string pointing to item_detail and passing it $row[menu_item] -->
            <!-- what the user sees is an image, a combination of the uploads folder name concatenated to the picture filename --> 
            <!-- columns two and three display the name and description from $row --> 
            <!-- close the row --> 
            <!-- close the php section created above --> 
            <!-- close the table -->
            <!-- begin updates (approx 11 lines) --> 
            <h2><?=$categoryName['name']?></h2>
            <table>
            <tr><th>Detail</th><th>Name</th><th>Description</th></tr>
            <?php foreach($rows as $row) { ?>
                <tr>
                <td><a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><img class = "detail" src="<?= $upload_path . $row['picture_file']?>"></a></td>
                <td><?= $row['menuitem_name'] ?> <?= $row['menuitem_name'] ?></a></td>
                <td><?= $row['menuitem_name'] ?> <?= $row['menuitem_description'] ?></a></td>
                </tr>
            <?php } ?>
            </table>
            <!-- end updates -->
        </div>
    <?php include 'includes/footer.php'; ?>
</html>