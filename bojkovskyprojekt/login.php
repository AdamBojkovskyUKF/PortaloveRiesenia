<?php
include_once "db_connect.php";

if($_POST['submit']==="login.php") {
    $db = $GLOBALS['db'];
    $login = $db->login($_POST['username'], $_POST['password']);
    if($login) {
        $_SESSION['is_admin'] = true;
        header('Location: admin.php');
    } else {
        header('Location: admin.php');
    }
} else {
    header('Location: admin.php');
}
?>
