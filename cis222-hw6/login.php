<?php
require_once 'includes/sessions.php';
$user_email = '';
$message = '';
if ($logged_in) {                              // If already logged in
    header('Location: admin.php');           // Redirect to account page
    exit;                                      // Stop further code running
}    
if($_SERVER['REQUEST_METHOD'] == 'POST') {     // If form submitted
    $user_email    = $_POST['email'];          // Email user sent
    $user_password = $_POST['password'];       // Password user sent
    if ($user_email == $email and $user_password == $password) { // If details correct
        login();                               // Call login function
        header('Location: admin.php');       // Redirect to account page
        exit;                                  // Stop further code running
    }
    else {
        $message = "Login unsuccessful";
    }
}
?>
<?php include 'includes/header.php'; ?>
<h1>Login</h1>
<h3><?= $message ?> </h3>
<form method="POST" action="login.php">
  Email: <input type="email" name="email" value="<?= $user_email ?>"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Log In">
</form>
<?php include 'includes/footer.php'; ?>