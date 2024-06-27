<?php 
require_once('../../config.php');
require_once 'includes/admin_sessions.php'; 
require_once('includes/functions.php');
require_login($admin_logged_in);
var_dump($_SERVER['HTTP_REFERER']);
$_SESSION['message'] = '';

if(!isset($_GET['id'])) {
    header('location: view_category.php');
    exit;
}else {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $sql = 'SELECT name
            FROM category 
            WHERE category_id = :category_id;';
    $statement = $DBH->prepare($sql);
    $statement->execute(['category_id' => $id]);
    $category = $statement->fetchColumn();
}
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $sql = "DELETE FROM category WHERE category_id = :category_id";
    $statement = $DBH->prepare($sql);
    $statement->execute(['category_id' => $id]);
    $count = $statement->rowCount();
    $_SESSION['message'] = "$count category deleted";
    header('location: admin.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/admin_header.php'; ?>
    <main class="container adminl" id = "content">
        <form action="del_category.php?id=<?=$id?>" method="POST">
          <h1>Delete Category</h1>
          <p>Click confirm to delete categroy" <em><?=html_escape($category)?></em></p>
          <input type="submit" name="delete" value=confirm class="btn-delete">
          <button><a href="admin.php">Cancel</a></button>
        </form>
    </main>
  <?php include 'includes/footer.php'; ?>
</html>