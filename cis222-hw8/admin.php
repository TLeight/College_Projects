<?php
require_once('../../config.php');
require_once 'includes/admin_sessions.php';
require_once('includes/functions.php');
require_login($admin_logged_in);
//new for hw8
// create a SELECT statement that gets the count of rows in menuitem
// issue the query, using the string variable created in the preceding example
// use the fetchColumn() method to store query result in a variable $menuitem_count
$sql = "SELECT COUNT(*) FROM menuitem;";
$statement = $DBH->query($sql);
$menuitem_count = $statement->fetchColumn();
// create a SELECT statement that gets the count of rows in category
// issue the query, using the string variable created in the preceding example
// use the fetchColumn() method to store query result in a variable $category_count
$sql = "SELECT COUNT(*) FROM category;";
$statement = $DBH->query($sql);
$category_count = $statement->fetchColumn();
// file management
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {      // If form submitted
    if ($_FILES['image']['name'] != "") {
        // upload file management
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
            // Check the media type is in the $allowed_types array
            $type   = mime_content_type($_FILES['image']['tmp_name']);        
            $error .= in_array($type, $allowed_types) ? '' : 'wrong type ';
            // Check the file extension is in the $allowed_exts array
            $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $error .= in_array($ext, $allowed_exts) ? '' : 'wrong file extension ';
            // if logo.png already exists, remove it so that inf.png appears
            if (file_exists($upload_path . $filename)) {
                unlink($upload_path . $filename);
            }
            // If there are no errors create the new filepath and try to move the file
            if (!$error) {
                $destination = $upload_path . $filename;
                $moved       = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            }
        }
        // store a status message
        if ($moved === true) {                                            // If it moved
           header("Location: admin.php");
           exit;
        } else {                                                          // Otherwise
           // $upl_message = "Could not upload file: $error";
            $_SESSION['message'] = "Could not upload file: $error";
        }
    }												
    else {
        //$upl_message = "No file selected";
        $_SESSION['message'] = "No file selected";
    }
}
$sql = "SELECT * from menuitem;";
$statement = $DBH->query($sql);
$rows = $statement->fetchAll();
// menu stats
//variables to hold minimum & maximum price, arrays to hold list of prices
$appetizer_prices = [];
$dessert_prices = [];
$main_course_prices = [];
$beverage_prices = [];
// 1-appetizer, 2-main course, 3-dessert, 4-beverage
foreach ($rows as $row) {
    if ($row['category_id'] == 1) {
        $appetizer_prices[] = $row['price'];
    }
    elseif ($row['category_id'] == 2) {
        $main_course_prices[] = $row['price'];
    }
    elseif ($row['category_id'] == 3) {
        $dessert_prices[] = $row['price'];
    }
    elseif ($row['category_id'] == 4) {
        $beverage_prices[] = $row['price'];
    }
}
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
    <?php include 'includes/admin_header.php'; ?>
        <?php
            // flash message - see login.php for message creation
            if ( isset($_SESSION["message"]) ) {
                echo('<p style="font-weight: bold;color:darkblue;background-color:lightgray">'.$_SESSION["message"]."</p>\n");
                unset($_SESSION["message"]);
            }
        ?>
        <div class="container-2col">
            <div class="sections">
                <h4>UPLOAD NEW LOGO</h4>
                <form method="POST" action="admin.php" enctype="multipart/form-data">
                    <label for="image"><b>Upload file:</b></label>
                    <input type="file" name="image" id="image"><br>
                    <input type="submit" value="Update Logo Image">
                </form>
            </div>
            <div class="sections">
                <h4>MANAGE MENU</h4>
                <table>
                    <!-- use $menuitem_count and $category_count to provide appropriate values in the last two row-->
                    <tr><th></th><th>Count</th><th class="create">Create</th><th class="view">View</th></tr>
                    <tr><td><strong>Categories</strong></td><td><?=$category_count ?></td><td><a href="add_category.php" class="btn btn-primary">Add</a></td><td><a href="view_category.php" class="btn btn-primary">View</a></td></tr>
                    <tr><td><strong>Menu Items</strong></td><td><?=$menuitem_count ?></td><td><a href="add_menuitem.php" class="btn btn-primary">Add</a></td><td><a href="view_menuitem.php" class="btn btn-primary">View</a></td></tr>
                </table>
            </div>
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