<?php
// Build the classifications option list
$classifList = '<select name="classificationId" id="classificationId">';
$classifList .= "<option>Choose a Car Classification</option>";
foreach ($classifications as $classification) {
    $classifList .= "<option value='$classification[classificationId]'";
    if (isset($classificationId)) {
        if ($classification['classificationId'] === $classificationId) {
            $classifList .= ' selected ';
        }
    } elseif (isset($invInfo['classificationId'])) {
        if ($classification['classificationId'] === $invInfo['classificationId']) {
            $classifList .= ' selected ';
        }
    }
    $classifList .= ">$classification[classificationName]</option>";
}
$classifList .= '</select>';

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
    <title><?php if (isset($invInfo['invMake']) && isset($invInfo['invModel'])) {
                echo "Modify $invInfo[invMake] $invInfo[invModel]";
            } elseif (isset($invMake) && isset($invModel)) {
                echo "Modify $invMake $invModel";
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
            <h1><?php
                if (isset($invInfo['invMake']) && isset($invInfo['invModel'])) {
                    echo "Modify $invInfo[invMake] $invInfo[invModel]";
                } elseif (isset($invMake) && isset($invModel)) {
                    echo "Modify$invMake $invModel";
                } ?>
            </h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            <form method="post" action="/vehicles/index.php" class="f-signup form-class">
                <div>
                    <label>Choose Car Classification </label>
                    <?php
                    echo $classifList;
                    ?>
                </div>
                <div>
                    <label for="invMake">Make: </label>
                    <input id="invMake" type="text" name="invMake" <?php if (isset($invMake)) {
                                                                        echo "value='$invMake'";
                                                                    } elseif (isset($invInfo['invMake'])) {
                                                                        echo "value='$invInfo[invMake]'";
                                                                    } ?> required>
                </div>
                <div>
                    <label for="invModel">Model: </label>
                    <input id="invModel" type="text" name="invModel" <?php if (isset($invModel)) {
                                                                            echo "value='$invModel'";
                                                                        } elseif (isset($invInfo['invModel'])) {
                                                                            echo "value='$invInfo[invModel]'";
                                                                        } ?> required>
                </div>
                <div>
                    <label for="invDescription">Description: </label>
                    <input id="invDescription" type="text" name="invDescription" <?php if (isset($invDescription)) {
                                                                                        echo "value='$invDescription'";
                                                                                    } elseif (isset($invInfo['invDescription'])) {
                                                                                        echo "value='$invInfo[invDescription]'";
                                                                                    } ?> required>
                </div>
                <div>
                    <label for="invImage">Image Path: </label>
                    <input id="invImage" type="text" name="invImage" <?php if (isset($invImage)) {
                                                                            echo "value='$invImage'";
                                                                        } elseif (isset($invInfo['invImage'])) {
                                                                            echo "value='$invInfo[invImage]'";
                                                                        } ?> required>
                </div>
                <div>
                    <label for="invThumbnail">Thumbnail Path: </label>
                    <input id="invThumbnail" type="text" name="invThumbnail" <?php if (isset($invThumbnail)) {
                                                                                    echo "value='$invThumbnail'";
                                                                                } elseif (isset($invInfo['invThumbnail'])) {
                                                                                    echo "value='$invInfo[invThumbnail]'";
                                                                                } ?> required>
                </div>
                <div>
                    <label for="invPrice">Price: </label>
                    <input id="invPrice" type="text" name="invPrice" <?php if (isset($invPrice)) {
                                                                            echo "value='$invPrice'";
                                                                        } elseif (isset($invInfo['invPrice'])) {
                                                                            echo "value='$invInfo[invPrice]'";
                                                                        } ?> required>
                </div>
                <div>
                    <label for="invStock">Stock: </label>
                    <input id="invStock" type="text" name="invStock" <?php if (isset($invStock)) {
                                                                            echo "value='$invStock'";
                                                                        } elseif (isset($invInfo['invStock'])) {
                                                                            echo "value='$invInfo[invStock]'";
                                                                        } ?> required>
                </div>
                <div>
                    <label for="invColor">Color: </label>
                    <input id="invColor" type="text" name="invColor" <?php if (isset($invColor)) {
                                                                            echo "value='$invColor'";
                                                                        } elseif (isset($invInfo['invColor'])) {
                                                                            echo "value='$invInfo[invColor]'";
                                                                        } ?> required>
                </div>
                <input type="submit" id="btnSubmit" name="submit" value="Update Vehicle">
                <!-- Add the action name - value pair -->
                <input type="hidden" name="action" value="updateVehicle">
                <input type="hidden" name="invId" value="
                    <?php if (isset($invInfo['invId'])) {
                        echo $invInfo['invId'];
                    } elseif (isset($invId)) {
                        echo $invId;
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