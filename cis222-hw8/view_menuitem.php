<?php
require_once('../../config.php');
require_once 'includes/admin_sessions.php';
require_once('includes/functions.php');
require_login($admin_logged_in);
var_dump($_SERVER['HTTP_REFERER']);
$_SESSION['message'] = '';
$sql = "SELECT menuitem_id, name FROM menuitem;";
$statement = $DBH->query($sql);
$rows = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/admin_header.php'; ?>
    <div class="container-icol">
        <div class="sections">
            <h4><?php if($_SESSION['message'] != '') { ?>
                WARNING: <?php $_SESSION['message'] ?>
                <?php } ?>
            </h4>
            <table>
                <tr><th>Name</th><th>Edit</th><th>Delete</th></tr>
                <?php foreach($rows as $row) { ?>
                    <tr>
                        <td><Strong><?= html_escape($row['name'])?></Strong></td>
                        <td><a href="add_menuitem.php?id=<?= $row['menuitem_id']?>">Edit</a></td>
                        <td><a href="del_menuitem.php?id=<?= $row['menuitem_id']?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</html>