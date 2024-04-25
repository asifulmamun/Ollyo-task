<?php
// $connect = mysql_connect('localhost', 'rashed', 'rashed');
// mysql_select_db('inventory', $connect);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "asifulmamun";
$password = "#Asiful1998";
$database = "inventory";

$connect = mysqli_connect($servername, $username, $password, $database);
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}



session_start();

// Register session variables (deprecated)
// session_register('type');
// session_register('user_id');

// commented for login problem, it will giving permission without login
// $_SESSION['type'] = '';
// $_SESSION['user_id'] = '';
