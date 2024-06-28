<?php
// homwework 2
// Tyler Leight
// cis 222

require_once 'includes/data.php';

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
     <title>Homework 2</title>
</head>

<body>
    <h1>Food n' Stuff</h1>

    <h2>Menu</h2>
    <table>
        <tr>
            <th>Meal</th><th>Name</th><th>Price</th><th>Vegan</th>
        </tr>
        <?php foreach($menu_items as $item) { ?>
        <tr>
            <td><?= $item['meal']?></td>
            <td><?= $item['name']?></td>
            <td><?= $item['price']?></td>
            <td><?= $item['vegan']?></td>
        </tr>
        <?php } ?>
    </table>

    <h2>Menu Statistics</h2>
    <table>
        <tr><th>Category</th><th>Average Cost</th></tr>
        <tr><td>Dessert</td><td><?= '$' .number_format($average_cost_dessert,2) ?></tr>
        <tr><td>Main Course</td><td><?= '$' .number_format($average_cost_main_course,2) ?></tr>
        <tr><td>Beverage</td><td><?= '$' .number_format($average_cost_beverage,2) ?></tr>
    </table>

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

</body>

</html>