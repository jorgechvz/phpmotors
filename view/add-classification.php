<?php 
if(!isset($_SESSION['loggedin'])){
    header('Location: /index.php');
} else if ($_SESSION['clientData']['clientLevel'] <= 1){
    header('Location: /index.php');
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Template | PHP Motors</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- device-width is the width of the screen in CSS pixels -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- screen is used for computer screens, tablets, smart-phones etc. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="/css/normalize.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen">
</head>

<body>
    <div id="wrapper">
        <header class="header">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/header.php" ?>
        </header>
        <nav class="navbar">
            <?php /* include $_SERVER['DOCUMENT_ROOT'] . "/common/nav.php"  */
            echo $navList;
            ?>
        </nav>
        <main id="main-registration">
            <h1>PHP Motors - Add Classification</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form method="post" action="/vehicles/index.php" class="f-signup form-class">
                <div>
                    <label for="classificationName">Classification Name: </label>
                    <span>Classification have a max of 30 characters</span>
                    <input id="classificationName" type="text" maxlength="30" name="classificationName" required>
                </div>
                <input type="submit" id="btnSubmit" name="submit" value="Add Classification">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="add-classifications">
            </form>
        </main>
        <hr>
        <footer class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/footer.php" ?>
        </footer>
    </div>
</body>

</html>