<?php
require_once 'includes/sessions.php';
logout();                             // Call logout() to terminate session
header('Location: index.php');         // Redirect to home page