<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','card_project');
// $mysqli = new mysqli('localhost', 'root', '', 'card_project');
$mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME );
if ($mysqli === false) {
    die("ERROR : Could not Connect." . $mysqli->connect_error);
}
?>