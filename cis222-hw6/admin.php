<?php
require_once('../../config.php');
require_once 'includes/sessions.php';
require_once('includes/functions.php');
require_login($logged_in);
$message       = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {      // If form submitted
    if ($_FILES['image']['name'] != "") {
        $error         = '';                                           // Initialize
        $moved         = false;  
        $upload_path   = 'img/logo/';                                   // Upload path
        $filename      = 'logo.png';
        $max_size      = 5242880;                                      // Max file size
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif',];    // Allowed file types
        $allowed_exts  = ['jpeg', 'jpg', 'png', 'gif',];               // Allowed file extensions
        $error = ($_FILES['image']['error'] === 1) ? 'too big ' : '';  // Check size error
        if ($_FILES['image']['error'] == 0) {                          // If no upload errors
            $error  .= ($_FILES['image']['size'] <= $max_size) ? '' : 'too big '; // Check size
            $type   = mime_content_type($_FILES['image']['tmp_name']);        
            $error .= in_array($type, $allowed_types) ? '' : 'wrong type ';
            $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $error .= in_array($ext, $allowed_exts) ? '' : 'wrong file extension ';
            if (file_exists($upload_path . $filename)) {
                unlink($upload_path . $filename);
            }
            if (!$error) {
                $destination = $upload_path . $filename;
                $moved       = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            }
        }
        if ($moved === true) {                                            // If it moved
           header("Location: index.php");
           exit;
        } else {                                                          // Otherwise
            $message = "Could not upload file: $error";
        }
    }												
    else {
        $message = "No file selected";
    }
}
// select all columns from the menuitem table
// issue the query (not using prepared statements this time)
// store results of query in $rows
// begin updates 
$sql = "SELECT * from menuitem;";
$statement = $DBH->query($sql);
$rows = $statement->fetchall();
// end updates
$appetizer_prices = [];
$dessert_prices = [];
$main_course_prices = [];
$beverage_prices = [];
// use the same foreach loop from homework 4 to collect pricing table data
// this time, use $rows in place of $menu_items and $row in place of $menu_item
// there is a change in category id numbering, where 1 is appetizer, 2 is main course, 3 is dessert, and 4 is beverage
// begin updates 
foreach ($rows as $row) {
    if($row['category_id'] == "1" ){
        $appetizer_prices[] = $row['price'];
    }elseif($row['category_id'] == "2"){
        $main_course_prices[] = $row["price"];
    }elseif($row['category_id'] == "3"){
        $dessert_prices[] = $row["price"];
    }elseif($row['category_id'] == "4"){
        $beverage_prices[] = $row["price"];
    }
}
// end updates
$total_no_beverage = count($beverage_prices);
list($min_beverage,$max_beverage) = min_max($beverage_prices);
$average_cost_beverage = array_sum($beverage_prices)/count($beverage_prices);

$total_no_dessert = count($dessert_prices);
list($min_dessert,$max_dessert) = min_max($dessert_prices);
$average_cost_dessert = array_sum($dessert_prices)/count($dessert_prices);

$total_no_main_course = count($main_course_prices);
list($min_main_course,$max_main_course) = min_max($main_course_prices);
$average_cost_main_course = array_sum($main_course_prices)/count($main_course_prices);

$total_no_appetizer = count($appetizer_prices);
list($min_appetizer,$max_appetizer) = min_max($appetizer_prices);
$average_cost_appetizer = array_sum($appetizer_prices)/count($appetizer_prices);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
        
        <div class="container">
            <div class="sections">
                <h4>UPLOAD NEW LOGO:
                <?php if ($message != '') { ?>
                    <?= $message ?>
                <?php } ?>
                </h4>
                <form method="POST" action="admin.php" enctype="multipart/form-data">
                    <label for="image"><b>Upload file:</b></label>
                    <input type="file" name="image" id="image"><br>
                    <input type="submit" value="Update Logo Image">
                </form>
            </div>
            <div class="sections">
                <h4>CHANGE RESTAURANT NAME</h4>
                <form method="POST" action="change_name.php">
                    <label for="name"><b>Enter name</b></label>
                    <input type="text" name="name"><br>
                    <input type="submit" value="Update Name">
                </form>
            </div>
        </div>
            <div class="sections">
                <h4>MANAGE MENU</h4>
                <table>
                    <tr><th></th><th>Count</th><th class="create">Create</th><th class="view">View</th></tr>
                    <tr><td><strong>Categories</strong></td><td></td><td><a href="#">Add</a></td><td><a href="#">View</a></td></tr>
                    <tr><td><strong>Articles</strong></td><td></td><td><a href="#">Add</a></td><td><a href="#">View</a></td></tr>
                </table>
            </div>
            <div class="sections">
                <h4>VIEW MENU STATISTICS</h4>
                <table>
                    <tr><th class="num">Category</th><th class="num"># of Items</th><th class="num">Minimum Price</th><th class="num">Maximum Price</th><th class="num">Average Price</th></tr>
                    <tr><td class="num">Appetizer</td><td class="num"><?= $total_no_appetizer ?></td><td class="num"> <?= '$'.number_format($min_appetizer,2) ?></td><td class="num"> <?= '$'.number_format($max_appetizer,2) ?></td><td class="num"> <?= '$'.number_format($average_cost_appetizer,2) ?></td> </tr>
                    <tr><td class="num">Dessert</td><td class="num"><?= $total_no_dessert ?></td><td class="num"> <?= '$'.number_format($min_dessert,2) ?></td><td class="num"> <?= '$'.number_format($max_dessert,2) ?></td><td class="num"> <?= '$'.number_format($average_cost_dessert,2) ?></td> </tr>
                    <tr><td class="num">Main Course</td><td class="num"><?= $total_no_main_course ?></td><td class="num"> <?= '$'.number_format($min_main_course,2) ?></td><td class="num"> <?= '$'.number_format($max_main_course,2) ?></td><td class="num"> <?= '$'.number_format($average_cost_main_course,2) ?> </td></tr>
                    <tr><td class="num">Beverage</td> <td class="num"><?= $total_no_beverage ?></td><td class="num"> <?= '$'.number_format($min_beverage,2) ?></td><td class="num"> <?= '$'.number_format($max_beverage,2) ?></td><td class="num"> <?= '$'.number_format($average_cost_beverage,2) ?> </td></tr>
                </table>
            </div>
    <?php include 'includes/footer.php'; ?>
</html>