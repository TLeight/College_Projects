    <head>
        <title>Homework 8</title>
        <link href="css/cis222-styles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
    <nav>
        <ul>
            <li><a href="index.php">
                <?php
                    if (file_exists("img/logo/logo.png"))
                        echo "<img src='img/logo/logo.png?t=".time()."'>";
                    else
                        echo "<img src='img/logo/inf.png?t=".time()."'>";
                ?>
            </a></li>
            <li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
            <li><?= $logged_in ? $_SESSION['user_email'] : '' ?></li>
            <li>L A V A S H</li>
        </ul>
    </nav>        
    <nav class="submenu">
        <ul>
            <li><a href="category.php?id=1">Appetizers</a></li>
            <li><a href="category.php?id=2">Main Courses</a></li>
            <li><a href="category.php?id=3">Desserts</a></li>
            <li><a href="category.php?id=4">Beverages</a></li>
        </ul>
    </nav>