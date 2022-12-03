<?php
include_once "DB.php";

use portalove\DB;
$db = new DB('localhost', 'bojkovskyprojekt', 'root', '');

global $db;

session_start();
