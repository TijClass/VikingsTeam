<?php
date_default_timezone_set('UTC');
$dbname = "booking";
$dbhost = "localhost";
$dbuser = "booking";
$dbpass = "";
function connectdb()
{
    global $dbname, $dbuser, $dbhost, $dbpass;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if (!$conn) return false;
    $conndb = mysqli_select_db($conn, $dbname);
    if (!$conndb) return false;
    return $conn;
}
connectdb();
?>