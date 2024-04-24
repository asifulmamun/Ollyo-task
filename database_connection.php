<?php
// $connect = mysql_connect('localhost', 'rashed', 'rashed');
// mysql_select_db('inventory', $connect);
$servername = "localhost";
$username = "asifulmamun";
$password = "#Asiful1998";
$database = "inventory";
$mysqli = new mysqli($servername, $username, $password, $database);


if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}


session_start();

// Register session variables (deprecated)
// session_register('type');
// session_register('user_id');
$_SESSION['type'] = '';
$_SESSION['user_id'] = '';
