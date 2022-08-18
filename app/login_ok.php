<?php
session_start();
include "../config/db.php";

$user_id = $_POST['user_id'];
$user_pass = $_POST['user_pass'];

$sql = "select user_pass,user_id,user_name from member where user_id='".$user_id."'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if ($user_pass == $row['user_pass']){
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_name'] = $row['user_name'];
    
    echo "<script>alert('로그인 되었습니다'); location.href='index.html'</script>";
} else {
    echo"<script>alert('아이디 혹은 비밀번호가 틀렸습니다');history.back();</script>";
}
?>
