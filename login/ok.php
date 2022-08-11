<?php
include "../config/db.php";

$user_id = $_POST['id'];
$user_pass = $_POST['pass'];
$user_name = $_POST['name'];
$user_date = date("Y-m-d H:i:s");

$sql = "insert into member (user_id, user_pass, user_name, user_date) values ('".$user_id."','".$user_pass."','".$user_name."','".$user_date."')";
echo $sql;
// insert into [테이블 명] ([필드명],[필드명],[필드명]) values ([값],[값],[값])
?>
