<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grading calculator</title>

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

<h1>Grade Calculator<h1>
    <?php
    $hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
    $hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
    $hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q1 = substr(filter_input(INPUT_POST, 'q1', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q2 = substr(filter_input(INPUT_POST, 'q2', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q3 = substr(filter_input(INPUT_POST, 'q3', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q4 = substr(filter_input(INPUT_POST, 'q4', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q5 = substr(filter_input(INPUT_POST, 'q5', FILTER_SANITIZE_NUMBER_INT),0,3);
    $exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);

    $grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam1)/425)*100;

    
    echo"<p>Current course grade is " . round($grade,0);

    if ($grade >= 90) 
    {
        echo"%, which is a A";
    }elseif ($grade >= 80) 
    {
        echo"%, which is a B";
    }elseif ($grade >= 70) 
    {
        echo"%, which is a C>";
    }elseif ($grade >= 60) 
    {
        echo"%, which is a D";
    }else 
    {
        echo"%, which is a E";
    }

    ?>
</body>
</html>