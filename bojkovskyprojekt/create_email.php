<?php
include_once "db_connect.php";

if($_POST['submit']==="create_email.php") {
    $db = $GLOBALS['db'];
    $insert = $db->createEmail($_POST['name'], $_POST['email'], $_POST['offer'], $_POST['start'], $_POST['end']);
    if($insert) {
        header("Location: index.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: index.php");
}
?>
