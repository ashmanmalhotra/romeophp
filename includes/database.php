<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASENAME', 'romeoblog');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASENAME);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


