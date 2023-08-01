<?php
if (!isset($_SESSION['loggedin'])) {
  header('Location: /phpmotors/index.php');
}
if (isset($_SESSION['message'])) {
  $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title><?php
          echo "Client ", $_SESSION['clientData']['clientFirstname'];
          ?> | PHP Motors</title>
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
    <main>
      <h1><?php echo $_SESSION['clientData']['clientFirstname'], " ", $_SESSION['clientData']['clientLastname'] ?> </h1>
      <h2>You are logged in.</h2>
      <ul>
        <li>First Name: <?php echo $_SESSION['clientData']['clientFirstname'] ?> </li>
        <li>Last Name: <?php echo $_SESSION['clientData']['clientLastname'] ?> </li>
        <li>Email: <?php echo $_SESSION['clientData']['clientEmail'] ?> </li>
      </ul>
      <?php
      if (isset($message)) {
        echo $message;
      }
      ?>
      <h2>Account Management</h2>
      <p>Use this link to update account information</p>
      <a class='btn_myaccount' id='btn_manage-vehicle' href='/phpmotors/accounts/index.php?action=update'>Update Account Information</a>
      <?php
      if ($_SESSION['clientData']['clientLevel'] > "1") {
        echo "<h2>Inventory Management</h2>";
        echo "<p>Use this link to manage the inventory</p>";
        echo "<a class='btn_myaccount' id='btn_manage-vehicle' href='/phpmotors/vehicles/index.php'>Vehicle Management</a>";
      }
      ?>
    </main>
    <hr>
    <footer class="footer">
      <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
    </footer>
  </div>
</body>

</html>
<?php unset($_SESSION['message']); ?>