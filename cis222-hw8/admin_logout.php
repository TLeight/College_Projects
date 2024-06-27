<?php
require_once 'includes/admin_sessions.php';
logout();    
$_SESSION['user_email'] = "";
header('Location: admin_login.php');         // Redirect to home page
exit;