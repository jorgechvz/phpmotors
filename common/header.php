<img src="../images/site/logo.png" alt="PHP Motors Logo Icon">
<div class="header-div">
    <a href="../search/" title="Search PHP Motors">&#x1F50D;</a>
    <?php
    if (isset($_SESSION['loggedin'])) {
        $messageHeader = $_SESSION['clientData']['clientFirstname'];
        echo "<a class='btn_myaccount' href='../accounts/index.php'><p>Welcome $messageHeader</p></a>";
        echo "<p>|</p>";
        echo "<a class='btn_myaccount' href='../accounts/index.php?action=logout'><p>Logout</p></a>";
    } else {
        echo "<a class='btn_myaccount' href='../accounts/index.php?action=myaccount'><p>My Account</p></a>";
    }
    ?>
</div>