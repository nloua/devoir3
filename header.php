<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/style_footer.css">
        <link rel="stylesheet" href="./assets/css/style_sendmail.css">
        <link rel="stylesheet" href="./assets/css/form_add.css">
        <link rel="stylesheet" href="./assets/css/style_btn_all_ad.css">
        <title>Halifax Canoe and Kaya</title>
    </head>

    <body>
        <nav class="navbar twitter-mode" role="navigation">
            <div class="navbar__logo"><img class="header_icon" src="./assets/images/paddle-white.png"></div>  
            <ul class="navbar__links">
                <li class="navbar__link third"><a href="all-adventures.php">All Adventures</a></li>
                <!--li class="navbar__link first"><a href="index.php">Home</a></li-->
                <li class="navbar__link second"><a href="admin-add.php">New Adventure</a></li>
                <!--li class="navbar__link third"><a href="all-adventures.php">All Adventure</a></li-->
                <!--li class="navbar__link fourth"><a href="book_trip.php">Book </a></li-->
                <!--li class="navbar__link fifth"><a href="index.php">Admin</a></li>
                <li class="navbar__link sixth"><a href="login.php">Login</a></li-->
            </ul>
            <button class="burger">
                <span class="bar"></span>
            </button>

            <div class="header_title">Halifax Canoe and Kayak</div>
        </nav>

        <div>
        <?php session_start();?>
        <h2 class="logout">
            <a class="logout_a" href="Logout.php">Log out</a>
        </h2>
        </div>

       

</body>