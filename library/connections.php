<?php 
function phpmotorsConnect() {
    $server = 'localhost';
    $dbname = 'phpmotors';
    $username = 'iClient';
    $password = '8J**EG]Cs0YxI3pN';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch(PDOException $err) {
        header('Location: /phpmotors/view/500.php');
        exit;
    }
}
// phpmotorsConnect();
?>