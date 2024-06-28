<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
// Assign to $id the value at $_GET's 'id' key
// Create $sql to get all columns from the menuitem table, where menuitem_id = :menuitem_id
// (See textbook page 448-449 on prepare/execute and placeholders)
// Call the prepare() method, passing it $sql, and storing the result in $statement
// Call $statement's execute method, passing it menuitem_id placeholder set to $id
// Call the $statement fetch() method, storing result in $row 
// Using a similar procedure, create $sql to get the name field from the category table, where category_id is equal to $row[category_id]
// Use prepare() to issue the query and store the result in $statement
// Call $statement's execute method, passing it category_id placeholder set to $row['category_id']
// Call $statement's fetch() method, storing the result in $category
// begin updates (approx 8 lines)

$id = $_GET['id'];
$sql = "SELECT * FROM menuitem WHERE menuitem_id = :menuitem_id;";
$statement = $DBH->prepare($sql);
$statement->execute(['menuitem_id' => $id]);
$row = $statement->fetch();

$sql = "SELECT name FROM category WHERE category_id = :category_id";
$statement = $DBH->prepare($sql);
// Warning: Trying to access array offset on value of type bool in C:\xampp\htdocs\cis222-hw6\item_detail.php on line 27
$statement->execute(['category_id' => $row['category_id']]);
$category = $statement->fetch();
// end updates
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        <div class="sections">
            <h2>Menu Details</Details></h2>
            <!-- create five <h3> lines for the item_detail output; use html_escape -->
            <!-- line 1 - display image within an img element; the src is a concatenation of the upload path and the $row['picture_file'] value -->
            <!-- line 2 - display the name of menuitem and the category name -->
            <!-- line 3 - display the menuitem description -->
            <!-- line 4 - similarly, display the price -->
            <!-- line 5 - and the vegan status, converting number to yes/no -->
            <!-- begin updates (approx 5 lines --> 
            <h3><img src="<?= $upload_path . html_escape($row['picture_file']) ?>"></h3>
            <h3><?= html_escape($row['name'])?> from the <?= html_escape($category['name']) ?> selection</h3>
            <h3><?= html_escape($row['description'])?></h3>
            <h3>Price: <?= '$' .number_format(html_escape($row['price']),2)?></h3>
            <h3>Vegan: <?= html_escape(($row['vegan'] == 0) ? "No" : "yes")?></h3>
            <!-- end updates -->
    </div>
    <?php include 'includes/footer.php'; ?>
</html>