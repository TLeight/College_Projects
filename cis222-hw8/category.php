<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
$upload_path   = 'uploads/';
$id = $_GET['id'];
$sql = "SELECT name from category where category_id = :category_id;";
$statement = $DBH->prepare($sql);
$statement->execute(['category_id' => $id]);
if (!$categoryName = $statement->fetch(PDO::FETCH_ASSOC)) {
    $_SESSION["message"] = "Invalid Category.";
    header('Location: index.php');       // Redirect to account page
    exit;                                  // Stop further code running
}
$sql = "SELECT menuitem_id, name, description, picture_file FROM menuitem  WHERE category_id = :category_id;";
$statement = $DBH->prepare($sql);
$statement->execute(['category_id' => $id]);
$rows = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        <div class="sections">
            <h2><?= $categoryName['name']."s" ?> </h2>
            <table>  
                <tr><th>Detail</th><th>Name</th><th>Description</th></tr>
                <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><a href="item_detail.php?id=<?= $row['menuitem_id'] ?>"><img class="detail" src="<?= $upload_path . html_escape($row['picture_file']) ?>"></a></td>
                    <td><?= html_escape($row['name']) ?></td>
                    <td><?= html_escape($row['description']) ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    <?php include 'includes/footer.php'; ?>
</html>