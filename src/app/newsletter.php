<?php
include('../contexts/init.php');
if (isset($_POST['email']) && connectdb()) {
    $email = $_POST['email'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-m-d H:i:s");
    $count = mysqli_fetch_array(mysqli_query(connectdb(), "SELECT COUNT(*) FROM newsletter WHERE email='" . $email . "'"));
    if ($count[0] == 0) {
        $res = mysqli_query(connectdb(), "INSERT INTO newsletter SET email='" . $email . "', ip='" . $ip . "', date='" . $date . "'");
        if ($res) {
            print 'true';
        } else {
            print 'false';
        }
    } else {
        print 'exists';
    }
}
