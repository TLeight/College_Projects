<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
$sql = "SELECT menuitem.menuitem_id, menuitem.name as menuitem_name, category.category_id, category.name as category_name, menuitem.price, picture_file from menuitem join category on menuitem.category_id = category.category_id";
$statement = $DBH->query($sql);
$combined = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
    <?php
        // flash message 
        if ( isset($_SESSION["message"]) ) {
            echo('<p style="font-weight: bold;color:darkblue;background-color:lightgray">'.$_SESSION["message"]."</p>\n");
            unset($_SESSION["message"]);
        }
    ?>
        <main class="grid">
            <?php foreach ($combined as $row) { ?>
                <article>
                    <a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><img class="detail" src="<?= $upload_path . $row['picture_file'] ?>"></a>
                    <h2><a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><?= html_escape($row['menuitem_name']) ?></a></h2>
                    <p><a href="category.php?id=<?= $row['category_id'] ?>"><?= html_escape($row['category_name']) ?></a></p>
                    <p><?= '$'.html_escape($row['price']) ?></td>
                </article>
            <?php } ?>
        </main>
    <?php include 'includes/footer.php'; ?>
</html>