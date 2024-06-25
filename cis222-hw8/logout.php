<?php
require_once 'includes/sessions.php';
logout();  
$_SESSION['$user_email'] = '';                           // Call logout() to terminate session
header('Location: index.php');         // Redirect to home page
exit;