<?php
session_start();                                         // Start/renew session
$admin_logged_in = $_SESSION['admin_logged_in'] ?? false;            // Is user logged in?                           // Password to login
function login()                                         // Remember user passed login
{
    session_regenerate_id(true);                         // Update session id
    $_SESSION['admin_logged_in'] = true;                       // Set logged_in key to true
}
function logout()                                        // Terminate the session
{
    $_SESSION['admin_logged_in'] = false;
    /*
    $_SESSION = [];                                      // Clear contents of array
    $params = session_get_cookie_params();               // Get session cookie parameters
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'],
        $params['secure'], $params['httponly']);         // Delete session cookie
    session_destroy(); 
    */                                  
}
function require_login($admin_logged_in)                       // Check if user logged in
{
    if ($admin_logged_in == false) {                           // If not logged in
        header('Location: admin_login.php');                   // Send to login page
        exit;                                            // Stop rest of page running
    }
}