<!DOCTYPE html>
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
            <h1>PHP Motors Register</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form method="post" action="/accounts/index.php" class="f-signup form-class">
                <div>
                    <label for="clientFirstname">First Name</label>
                    <input type="text" name="clientFirstname" id="clientFirstname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?> required>
                </div>
                <div>
                    <label for="clientLastname">Last Name</label>
                    <input id="lName" type="text" name="clientLastname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";} ?> required>
                </div>
                <div>
                    <label for="clientEmail">Email:</label>
                    <input id="clientEmail" type="email" name="clientEmail" placeholder="Enter a valid email address" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
                </div>
                <div>
                    <label for="clientPassword">Password</label>
                    <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
                    <input id="password" type="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" <?php if(isset($Password)){echo "value='$Password'";} ?> required>
                </div>
                <input type="submit" id="btnSubmit" name="submit" value="Register"></input>
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="register">
            </form>
        </main>
        <hr>
        <footer class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/footer.php" ?>
        </footer>
    </div>
</body>

</html>