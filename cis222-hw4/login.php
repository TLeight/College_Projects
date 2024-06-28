<?php 
include 'includes/sessions.php';
$user_email = "";
$message = "";

if ($logged_in) {
    header('Location: admin.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
}

if($user_email == $email and $user_password == $password) {
    login();
    header('Location: admin.php');
    exit;
}
?>

head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" href="css/cis222-styles.css">
     <title>Homework 4</title>
</head>

<body>

    <?php include 'includes/header.php' ?>

    <h1>Login</h1>
    <h3><?= $message?></h3>
    <form method = "POST" action = "login.php">
        Email: <input type = "email" name = "email"><br>
        Password: <input type = "password" name = "password"><br>
        <input type = "submit" value = "Log in">
    </form>
    
    <?php include 'includes/footer.php' ?>

</body>
       
</html>