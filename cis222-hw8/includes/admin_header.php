    <head>
        <title>Homework 8</title>
        <link href="css/cis222-styles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="admin.php">
                <?php
                    if (file_exists("img/logo/logo.png"))
                        echo "<img src='img/logo/logo.png?t=".time()."'>";
                    else
                        echo "<img src='img/logo/inf.png?t=".time()."'>";
                ?>
            </a></li>
            <li><?= $admin_logged_in ? '<a href="admin_logout.php">Log Out</a>' : '<a href="admin_login.php">Log In</a>'; ?></li>
            <li><?= $admin_logged_in ? $_SESSION['user_email'] : '' ?></li>
            <li><a href="index.php">View Menu</a></li>
        </ul>
    </nav>        
    