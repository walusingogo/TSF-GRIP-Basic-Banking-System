<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsf_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database Connection Error" . mysqli_connect_error());
}
