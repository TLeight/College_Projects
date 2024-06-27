<?php
require_once 'includes/admin_sessions.php';
require_once('../../config.php');
$user_email = '';
$message = '';
if ($admin_logged_in) {                              // If already logged in
    header('Location: admin.php');           // Redirect to account page
    exit;                                      // Stop further code running
}    
if($_SERVER['REQUEST_METHOD'] == 'POST') {     // If form submitted
    $user_email    = $_POST['email'];          // Email user sent
    $user_password = $_POST['password'];       // Password user sent
    $sql="SELECT email, password FROM member where email = :email";
    $stmt = $DBH->prepare($sql);
    $stmt->execute(['email' => $user_email]);
    $result=$stmt->fetch();
    if ($result !== false) {
        if ($result[1] == $user_password) {
            login();
            $_SESSION['user_email'] = $user_email;
            header('Location: admin.php');
            exit;
        }
        else {
            $message = "Login unsuccessful";
        }
    }
    else {
        $message = "Login unsuccessful";
    }
}
?>
<?php include 'includes/admin_header.php'; ?>
<h1>Login</h1>
<h3><?= $message ?> </h3>
<form method="POST" action="admin_login.php">
  Email: <input type="email" name="email" value="<?= $user_email ?>"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Log In">
</form>
<?php include 'includes/footer.php'; ?>