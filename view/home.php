<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/normalize.css" type="text/css" rel="stylesheet" media="screen">
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>Home | PHP Motors</title>
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/header.php" ?>
        </header>
        <nav class="navbar">
            <?php //include $_SERVER['DOCUMENT_ROOT'] . "/common/nav.php" 
            echo $navList;
            ?>
        </nav>
        <main id="main_home">
            <section class="hover_container">
                <div class="text_hover">
                    <h1>Welcome to PHP Motors</h1>
                    <div class="features_dolorean">
                        <h2>DMC Dolorean</h2>
                        <ul>
                            <li>3 Cup holders</li>
                            <li>Superman doors</li>
                            <li>Fuzzy dice</li>
                        </ul>
                    </div>
                </div>
                <img class="dolorean_image" src="images/vehicles/1982-dmc-delorean.jpg" alt="Hover Image for Dolorean Car">
                <a href="#" class="btn_owntoday">
                    <img src="images/site/own_today.png" alt="Own today button">
                </a>
            </section>
            <div class="grid_section">
                <section class="reviews_container">
                    <h2>DMC Dolorean Reviews</h2>
                    <ul>
                        <li>"So fast its almost like traveling in time" [4/5]</li>
                        <li>"Coolest ride on the road" [4/5]</li>
                        <li>"I'm feeling Marty McFly" [5/5]</li>
                        <li>"The most futuristic ride of our day" [4.5/5]</li>
                        <li>"80's livin and I love it!" [5/5]</li>
                    </ul>
                </section>
                <section class="upgrades_container">
                    <h2>Delorean Upgrades</h2>
                    <div class="images_upgrade_container">
                        <div>
                            <div>
                                <img src="images/upgrades/flux-cap.png" alt="Flux Capacitor Icon">
                            </div>
                            <a href="#">Flux Capacitor</a>
                        </div>
                        <div>
                            <div>
                                <img src="images/upgrades/flame.jpg" alt="Flame Decals Icon">
                            </div>
                            <a href="#">Flame Decals</a>
                        </div>
                        <div>
                            <div>
                                <img src="images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers Icon">
                            </div>
                            <a href="#">Bumper Stickers</a>
                        </div>
                        <div>
                            <div>
                                <img src="images/upgrades/hub-cap.jpg" alt="Hubs Caps Icon">
                            </div>
                            <a href="#">Hubs Caps</a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <hr>
        <footer class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/footer.php" ?>
        </footer>
    </div>
</body>

</html>