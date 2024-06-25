<?php
// homwework 3
// Tyler Leight
// cis 222

require_once 'includes/data.php';

    // for handling inage upload.
    //print_r($_FILES);    
    
    $moved         = false;                                        
    $message       = '';                                           
    $error         = '';                                           
    $upload_path   = 'img/logo/'; 
    $filename      = 'logo.png';                          
    $max_size      = 5242880;                                      
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif',];    
    $allowed_exts  = ['jpeg', 'jpg', 'png', 'gif',]; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {                    // If form submitted
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
        if (file_exists("img/logo/logo.png")) {
            unlink("img/logo/logo.png");
        }
        
        // If there are no errors create the new filepath and try to move the file
        if (!$error) {
            $destination = $upload_path . "logo.png";
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        }
    }
    // store a status message
    if ($moved === true) {                                            // If it moved
        header("Location: index.php");
        exit;
    } else {                                                          // Otherwise
        $message = "Could not upload file: $error";
    }
}

$total_cost_dessert = 0;
$total_cost_main_course = 0;
$total_cost_beverage = 0;
$total_no_dessert = 0;
$total_no_main_course = 0;
$total_no_beverage = 0;

$dessert_prices = [];
$main_course_prices = [];
$beverages_prices = [];

foreach($menu_items as $item) {
    if($item['meal'] == 'Dessert') {
    $total_cost_dessert += $item['price'];
    $total_no_dessert++;
    $dessert_prices[] = $item['price'];
    }elseif($item['meal'] == 'Main Course') {
        $total_cost_main_course += $item['price'];
        $total_no_main_course++;
        $main_course_prices[] = $item['price'];
    }elseif($item['meal'] == 'Beverage') {
        $total_cost_beverage += $item['price'];
        $total_no_beverage++;
        $beverages_prices[] = $item['price'];
    }    
}
sort($dessert_prices);
sort($main_course_prices);
sort($beverages_prices);

$max_dessert = $dessert_prices[count($dessert_prices)-1];
$min_dessert = $dessert_prices[0];
$max_main_course = $main_course_prices[count($main_course_prices)-1];
$min_main_course = $main_course_prices[0];
$max_beverages = $beverages_prices[count($beverages_prices)-1];
$min_beverages = $beverages_prices[0];

$average_cost_dessert = $total_cost_dessert / $total_no_dessert;
$average_cost_main_course = $total_cost_main_course / $total_no_main_course;
$average_cost_beverage = $total_cost_beverage / $total_no_beverage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" href="css/cis222-styles.css">
     <title>Homework 3</title>
</head>

<body>
    <?php include 'includes/header.php' ?>
    <h2>Menu Management</h2>

    <?php if (file_exists("img/logo/logo.png")) { ?>
    <?php
        echo "<p><img src='img/logo/logo.png?t=".time()."'></p>";
    ?>
    <?php } else { ?>
        <p><img src="img/logo/inf.png"></p>   
    <?php } ?>
    
    <h4><?= $message ?></h4>
    <form method = "POST" action = "admin.php" enctype = "multipart/form-data"> 
        <lable for = "image"> <b> Uploadv File: <b> </label>
        <input type = "file" name = "image" id = image> <br>
        <input type="submit" value="Upload">
    </form>
    
    <?// for some reason the number of items will not appear.?>
    <h2>Pricing Information by Category</h2>
    <table>
        <tr><th>Category</th><th># of Items</th><th>Minimum Price</th><th>Maximum Price</th><th>Average Price</th></tr>
        <tr><td>Dessert</td><td><?= $total_no_dessert ?></td><td><?= '$' .number_format($min_dessert,2) ?></td><td><?= '$' .number_format($max_dessert,2) ?></td>
            <td><?= '$' .number_format($average_cost_dessert,2) ?></td></tr>
        <tr><td>Main Course</td><td><?= $total_no_main_course ?></td><td><?= '$' .number_format($min_main_course,2) ?></td><td><?= '$' .number_format($max_main_course,2) ?></td>
            <td><?= '$' .number_format($average_cost_main_course,2) ?></td></tr>
        <tr><td>Beverages</td><td><?= $total_no_beverage ?></td><td><?= '$' .number_format($min_beverages,2) ?></td><td><?= '$' .number_format($max_beverages,2) ?></td>
            <td><?= '$' .number_format($average_cost_beverage,2) ?></td></tr>
        
    </table>

    <?php include 'includes/footer.php' ?>

</body>

</html>