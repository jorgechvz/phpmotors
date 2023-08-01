<?php
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Image Management | PHP Motors</title>
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
            <h1>Image Management</h1>
            <h2>Add New Vehicle Image</h2>
            <?php
            if (isset($message)) {
                echo $message;
            } ?>

            <form class="image-form" action="/phpmotors/uploads/" method="post" enctype="multipart/form-data">
                <div>
                    <label class="labelInvId">Vehicle</label>
                    <?php echo $prodSelect; ?>
                    <fieldset>
                        <label>Is this the main image for the vehicle?</label>
                        <label for="priYes" class="pImage">Yes</label>
                        <input type="radio" name="imgPrimary" id="priYes" class="pImage" value="1">
                        <label for="priNo" class="pImage">No</label>
                        <input type="radio" name="imgPrimary" id="priNo" class="pImage" checked value="0">
                    </fieldset>
                </div>
                <div>
                    <label>Upload Image:</label>
                    <input class="upload-file" type="file" name="file1">
                </div>
                <input type="submit" class="regbtn uploadImageBtn" value="Upload">
                <input type="hidden" name="action" value="upload">
            </form>
            <hr>
            <h2>Existing Images</h2>
            <p class="notice">If deleting an image, delete the thumbnail too and vice versa.</p>
            <?php
            if (isset($imageDisplay)) {
                echo $imageDisplay;
            } ?>
        </main>
        <hr>
        <footer class="footer">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
        </footer>
    </div>
</body>

</html>
<?php unset($_SESSION['message']); ?>