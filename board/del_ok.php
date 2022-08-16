<?php
include "../config/db.php";

$board_idx = $_POST['board_idx'];
$pass = $_POST['pass'];

$sql = "select board_pass from board where board_idx=".$board_idx;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

if ($row['board_pass'] == $pass ) {
    $del = "delete from board where board_idx=".$board_idx;
    mysqli_query($con, $del);
    echo "<script>alert('글을 삭제했습니다');
    location.href='list.php';</script>";
} else {
    echo "<script> alert('비밀번호가 일치하지 않습니다'); history.back();</script>";
}
echo $sql;
?>