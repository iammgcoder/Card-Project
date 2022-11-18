<?php
// session_start();
// if (!$_SESSION['userid']) {
//     header('Location:index.php');
// }
require('./connection.php');

$card_details = $mysqli->query('DELETE FROM `card_details` where `id`=' . $_GET['id'] . ' ' );

header('Location:index.php');
