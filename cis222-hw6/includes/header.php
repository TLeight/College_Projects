    <!-- 
        1 - hw4 added login/logout menu item
        2 - moved logo.png into nav bar
    -->
    <head>
        <title>Homework 6</title>
        <link href="css/cis222-styles.css" rel="stylesheet">
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
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><?= $logged_in ? '<a href="logout.php">Log Out</a>' : '<a href="login.php">Log In</a>'; ?></li>
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