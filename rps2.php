<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rock Paper Scissors Game</title>

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

<h1>Rock Paper Scissors Game<h1>
    <?php

    $choice = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);

    if ($choice == 0) 
    {
        echo"<p><img src=\"images/rock1.png\" alt=\"rock\">&nbsp;";
    }elseif ($choice == 1) 
    {
        echo"<p><img src=\"images/paper1.png\" alt=\"paper\">&nbsp;";
    }elseif ($choice == 2) 
    {
        echo"<p><img src=\"images/scissors1.png\" alt=\"scissors\">&nbsp;";
    }

    $comp = rand(0,2);

    if ($comp == 0) 
    {
        echo"<img src=\"images/rock2.png\" alt=\"rock\">&</p>";
    }elseif ($comp == 1) 
    {
        echo"<img src=\"images/paper2.png\" alt=\"paper\"></p>";
    }elseif ($comp == 2) 
    {
        echo"<img src=\"images/scissors2.png\" alt=\"scissors\"></p>";
    }

    if ($choice == $comp) 
    {
        echo "<p> its a tie </p>";
    }elseif ($choice == 0 and $comp == 1) 
    {
        echo "<p>you lose </p>";
    }elseif ($choice == 0 and $comp == 2) 
    {
        echo "<p>you win </p>";
    }elseif ($choice == 1 and $comp == 0) 
    {
        echo "<p>you win </p>";
    }elseif ($choice == 1 and $comp == 2) 
    {
        echo "<p>you lose </p>";
    }elseif ($choice == 2 and $comp == 0) 
    {
        echo "<p>you lose </p>";
    }elseif ($choice == 2 and $comp == 1) 
    {
        echo "<p>you win </p>";
    }

    ?>
</body>
</html>