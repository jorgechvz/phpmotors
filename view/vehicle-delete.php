<?php
if (!isset($_SESSION['loggedin'])) {
    header('Location: /index.php');
} else if ($_SESSION['clientData']['clientLevel'] <= 1) {
    header('Location: /index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if (isset($invInfo['invMake'])) {
                echo "Delete $invInfo[invMake] $invInfo[invModel]";
            } ?> | PHP Motors</title>
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
            <h1><?php if (isset($invInfo['invMake'])) {
                    echo "Delete $invInfo[invMake] $invInfo[invModel]";
                } ?></h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <p>Confirm Vehicle Deletion. The delete is permanent.</p>
            <form method="post" action="/vehicles/index.php" class="f-signup form-class">
                <div>
                    <label for="invMake">Vehicle Make: </label>
                    <input id="invMake" type="text" name="invMake" <?php
                                                                    if (isset($invInfo['invMake'])) {
                                                                        echo "value='$invInfo[invMake]'";
                                                                    } ?> readonly>
                </div>
                <div>
                    <label for="invModel">Vehicle Model: </label>
                    <input id="invModel" type="text" name="invModel" <?php
                                                                        if (isset($invInfo['invModel'])) {
                                                                            echo "value='$invInfo[invModel]'";
                                                                        } ?> readonly>
                </div>
                <div>
                    <label for="invDescription">Vehicle Description: </label>
                    <input id="invDescription" type="text" name="invDescription" <?php
                                                                                    if (isset($invInfo['invDescription'])) {
                                                                                        echo "value='$invInfo[invDescription]'";
                                                                                    } ?> readonly>
                </div>
                <input type="submit" id="btnSubmit" name="submit" value="Delete Vehicle">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="deleteVehicle">
                <input type="hidden" name="invId" value="
                <?php if (isset($invInfo['invId'])) {
                    echo $invInfo['invId'];
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

<!-- // Build a select option using the $classifications array
$classificationList = '<select id="classificationId" name="classificationId">';
foreach ($classifications as $elementsClassification) {
    $classificationList .= "<option value='$elementsClassification[classificationId]'";
    if (isset($classificationId)) {
        if ($elementsClassification['classificationId'] == $classificationId) {
            $classificationList .= ' selected ';
        }
    }
    $classificationList .= ">$elementsClassification[classificationName]</option>";
}
$classificationList .= '</select>'; -->