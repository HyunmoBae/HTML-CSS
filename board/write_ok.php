<?php
include "../config/db.php";

$title = $_POST['title'];
echo $title;
$notice = $_POST['notice'];
if($notice == ""){
    $notice = 0;
}
echo $notice;
$name = $_POST['name'];
echo $name;
$memo = $_POST['editor1'];
echo $memo;
$pass = $_POST['pass'];
echo $pass;
$wdate = date("Y/m/d H:i:s");
echo $wdate;
$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

?>