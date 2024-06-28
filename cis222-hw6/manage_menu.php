<?php 
    require_once('../../config.php');
    require_once 'includes/sessions.php';
    require_once('includes/functions');
    require_login($logged_in);
    $message       = "This feature coming soon";
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php'; ?>
    <h2>Menu Management</h2>
    <h3><?= $message ?> </h3>
    <?php include 'includes/footer.php'; ?>
</html>