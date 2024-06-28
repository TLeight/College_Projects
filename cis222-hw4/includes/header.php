    <head>
        <title>Homework 4</title>
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
                <li>F O O O D N' S T U F F</li>
            </ul>
        </nav>        