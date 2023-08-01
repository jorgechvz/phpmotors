<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "$vehicles[invMake]  $vehicles[invModel]"; ?> | PHP Motors, Inc.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- device-width is the width of the screen in CSS pixels -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- screen is used for computer screens, tablets, smart-phones etc. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="/phpmotors/css/normalize.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/header.php" ?>
        </header>
        <nav class="navbar">
            <?php /* include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/nav.php"  */
            echo $navList;
            ?>
        </nav>
        <main id="main-detail">
            <h1><?php echo "$vehicles[invMake]  $vehicles[invModel]" ?></h1>
            <div class="detail-container">
                <?php if (isset($message)) {
                    echo $message;
                }
                ?>
                <?php
                if (isset($thumbnailDisplay)) {
                    echo $thumbnailDisplay;
                }
                ?>
                <?php if (isset($vehicleDisplay)) {
                    echo $vehicleDisplay;
                } ?>
            </div>
        </main>
        <hr>
        <footer class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
        </footer>
    </div>
</body>

</html>