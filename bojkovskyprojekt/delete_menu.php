<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if($_POST['submit']==="delete_menu.php") {
    $delete = $db->deleteMenu($_POST['id']);
    if($delete) {
        header("Location: admin.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: admin.php");
}
?>
