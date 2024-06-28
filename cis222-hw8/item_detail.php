<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
$id = $_GET['id'];

$sql = "SELECT * from menuitem where menuitem_id = :menuitem_id;";
$statement = $DBH->prepare($sql);
$statement->execute(['menuitem_id' => $id]);
if (!$row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $_SESSION["message"] = "Invalid Menu Item.";
    header('Location: index.php');       // Redirect to account page
    exit;                                  // Stop further code running
}
$sql = "SELECT name from category where category_id = :category_id";
$statement = $DBH->prepare($sql);
$statement->execute(['category_id' => $row['category_id']]);
$category = $statement->fetch();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        <div class="sections">
            <h2>Menu Detail</h2>
            <h3><img src="<?= $upload_path . html_escape($row['picture_file']) ?>"></h3>
            <h3><?= html_escape($row['name']) ?> from the <?= html_escape($category['name']) ?> Selection </h3>
            <h3><?= html_escape($row['description']) ?></h3>
            <h3>Price: <?= '$'.html_escape($row['price']) ?> </h3>
            <h3>Vegan: <?= html_escape(($row['vegan']) == 0) ? "No" : "Yes" ?> </h3>
    </div>
    <?php include 'includes/footer.php'; ?>
</html>