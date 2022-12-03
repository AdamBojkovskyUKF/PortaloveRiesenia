<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if($_POST['submit']==="create_menu.php") {
    $update = $db->createMenu($_POST['name'], $_POST['icon'], $_POST['description']);
    if($update) {
        header("Location: admin.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: admin.php");
}
?>
