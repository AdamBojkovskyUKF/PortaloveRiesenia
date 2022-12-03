<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if($_POST['submit']==="update_menu.php") {
    $update = $db->updateMenu($_POST['id'], $_POST['name'], $_POST['icon'], $_POST['description']);
    if($update) {
        header("Location: admin.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: admin.php");
}
?>
