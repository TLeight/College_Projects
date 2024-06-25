<?php 
require_once('../../config.php');
require_once 'includes/admin_sessions.php'; 
require_once('includes/functions.php');
require_login($admin_logged_in);
var_dump($_SERVER['HTTP_REFERER']);
$_SESSION['message'] = '';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$category = [
  'category_id' => "",
  "name" => "",
  "description" => "",
];

if($id) {
  $sql ='SELECT category_id, name, description 
        FROM category 
        WHERE category_id = :category_id;';
  $statement = $DBH->prepare($sql);
  $statement->execute(['category_id' => $id]);
  $category = $statement->fetch();
}

if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $category['name']        = $_POST['name'];
  $category['description'] = $_POST['desc'];
  $category['category_id'] = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
  if($category['category_id']){
    $sql = "UPDATE category 
            SET name = :name, description = :description 
            WHERE category_id = :category_id;"; 
    $statement = $DBH->prepare($sql);
    $statement->execute(['category_id'=>$category['category_id'],'name'=>$category['name'], 'description'=>$category['description']]);
    $_SESSION['message'] = "Category Modified";
  } else{
    $sql = "INSERT INTO category
            VALUES(NULL, :name, :description);";
    $statement = $DBH->prepare($sql);
    $statement->execute(['name'=>$category['name'], 'description'=>$category['description']]);
    $_SESSION['message'] = "Category Added";
  }
  header('location: admin.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/admin_header.php'; ?>
    <div class="container-icol">
      <div class="sections">
        <form action = "add_category.php" method="POST">
          <h1>Add/Edit</h1>
          <label for="name">Name</label>
          <input type="text" name="name" required_id="name" value="<?= $category['name']?>">
          <label for="desc">Desctiption</label>
          <input type="text" name="desc" id="desc" value="<?= $category['description']?>">
          <input type="hidden" name ="id" value="<?= $category['category_id']?>">
          <input type="submit" value="save">
        </form>
      </div>
    </div>
  <?php include 'includes/footer.php'; ?>
</html>