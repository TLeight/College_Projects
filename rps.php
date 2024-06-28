<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rock Paper Scissors</title>

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

<form action="rps2.php" method="post">

<p>Your Choice</p>

<p>
    <input type="radio" name="choice" value="0"> rock &nbsp;
    <input type="radio" name="choice" value="1"> paper &nbsp;
    <input type="radio" name="choice" value="2"> scissors &nbsp;
    
</p>

<input type="submit" value="play" class="centercell">
</form>
</body>
</html>