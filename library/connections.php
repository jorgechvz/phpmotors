<?php 
function phpmotorsConnect() {
    $server = 'nyc.domcloud.id';
    $dbname = 'ironclad_respect_liv_db';
    $username = 'ironclad-respect-liv';
    $password = '+E-pzp7q962YJA(8Mm';
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