<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login | PHP Motors</title>
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
    <main id="login-main">
      <h1>PHP Motors Login</h1>
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
      } 
      if (isset($message)) {
        echo $message;
      }
      ?>
      <form method="post" action="/phpmotors/accounts/" class="f-login form-class">
        <div>
          <label for="clientEmail">Email</label><br>
          <input id="clientEmail" type="email" name="clientEmail" placeholder="Enter a valid email address" <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?> required>
        </div>
        <div>
          <label for="clientPassword">Password</label>
          <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
          <input id="password" type="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
        </div>
        <a class="newAccountLink" href="/phpmotors/accounts/index.php?action=registration">Click for register now!</a><br>
        <button type="submit" id="btnSubmit">Login</button>
        <input type="hidden" name="action" value="login">
      </form>
    </main>
    <hr>
    <footer class="footer">
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>