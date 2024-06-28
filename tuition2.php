<!DOCTYPE html>
<html lang="en">
<head>
    <title>tution calculator</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>

<?php include('header.php'); ?>

<h1>Tuition Calculator<h1>
    <?php
    $residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
    $lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,2);
    $upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,2);
    $finaid = substr(filter_input(INPUT_POST, 'finaid', FILTER_SANITIZE_NUMBER_INT),0,1);

    if ($lower == "" and $upper == "")
    exit("<a href=\"javascript:history.go(-1)\">please fill out both forms></a>");

    if($residency == 1)
    {
        $residency = "in-district";
        $tuition = ($lower * 105.75) + ($upper * 200) + (($lower + $upper) * 23) + 50 + 60;
        echo "<p>total of a in district tuition cost with $lower level 100 - 200 credit hours and $upper 300 - 400 credit hours is $tuition</p>";
    } elseif ($residency == 2)
    {
        $residency = "out of district";
        $tuition = ($lower * 184.50) + ($upper * 265) + (($lower + $upper) * 23) + 50 + 60;
        echo "<p>total of a out of district tuition cost with $lower level 100 - 200 credit hours and $upper 300 - 400 credit hours is $tuition</p>";
    } elseif ($residency == 3) 
    {
       $residency = "out of state / international student";
       $tuition = ($lower * 267.50) + ($upper * 350) + (($lower + $upper) * 23) + 50 + 60;
       echo "<p>total of a out of state / international student tuition cost with $lower level 100 - 200 credit hours and $upper 300 - 400 credit hours is $tuition</p>";
    }

    if ($finaid == 2) 
    {
        echo "Helpful webapges";

        echo "<p><li><a href=\"https://www.hfcc.edu/financial-aid\">https://www.hfcc.edu/financial-aid</a></p>";
        echo "<p><li><a href=\"https://www.hfcc.edu/tuition-and-payment/scholarships\">https://www.hfcc.edu/tuition-and-payment/scholarships</a></p>";
        echo "<p><li><a href=\"https://www.hfcc.edu/steps/payment/\">https://www.hfcc.edu/steps/payment/</a></p>";     
    }


    ?>
</body>
</html>