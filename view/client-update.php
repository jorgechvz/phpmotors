<?php
if (!isset($_SESSION['loggedin'])) {
  header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Account Management | PHP Motors</title>
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
    <main id="login-main">
      <h1>Manage Account</h1>
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
      }
      if (isset($message)) {
        echo $message;
      }
      ?>
      <form method="post" action="/accounts/" class="f-update-account form-class">
        <h2>Update Account</h2>
        <div>
          <label for="clientFirstname">First Name:</label>
          <input name="clientFirstname" id="clientFirstname" type="text" required <?php
                                                                                  $firstName = $_SESSION['clientData']['clientFirstname'];
                                                                                  if (isset($clientFirstname)) {
                                                                                    echo "value='$clientFirstname'";
                                                                                  } elseif (isset($firstName)) {
                                                                                    echo "value='$firstName'";
                                                                                  }; ?>>
        </div>
        <div>
          <label for="clientLastname">Last Name:</label>
          <input name="clientLastname" id="clientLastname" type="text" required <?php
                                                                                $lastName = $_SESSION['clientData']['clientLastname'];
                                                                                if (isset($clientLastname)) {
                                                                                  echo "value='$clientLastname'";
                                                                                } elseif (isset($lastName)) {
                                                                                  echo "value='$lastName'";
                                                                                }; ?>>
        </div>
        <div>
          <label for="clientEmail">Email:</label>
          <input name="clientEmail" id="clientEmail" type="email" required <?php
                                                                            $email = $_SESSION['clientData']['clientEmail'];
                                                                            if (isset($clientEmail)) {
                                                                              echo "value='$clientEmail'";
                                                                            } elseif (isset($email)) {
                                                                              echo "value='$email'";
                                                                            }; ?>>
        </div>
        <button type="submit" class="btnSubmitUpdate">Update Info</button>
        <input type="hidden" name="action" value="updateInfo">
        <input type="hidden" name="clientId" value="
                    <?php
                    if (isset($_SESSION['clientData']['clientId'])) {
                      echo $_SESSION['clientData']['clientId'];
                    } elseif (isset($clientId)) {
                      echo $clientId;
                    } ?>
                    ">
      </form>
      <form method="post" action="/accounts/" class="f-update-password form-class">
        <h2>Update Password</h2>
        <div>
          <label for="clientPassword">Password</label>
          <span>Passwords must be at least 8 characters and contain at least 1 number, 1 capital letter and 1 special character</span>
          <input id="clientPassword" type="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
        </div>
        <button type="submit" class="btnSubmitUpdate">Update Password</button>
        <input type="hidden" name="action" value="updatePassword">
        <input type="hidden" name="clientId" value="
                    <?php
                    if (isset($_SESSION['clientData']['clientId'])) {
                      echo $_SESSION['clientData']['clientId'];
                    } elseif (isset($clientId)) {
                      echo $clientId;
                    } ?>
                    ">
      </form>
    </main>
    <hr>
    <footer class="footer">
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>