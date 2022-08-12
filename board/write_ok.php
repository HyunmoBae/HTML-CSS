<?php
include "../config/db.php";

$title = $_POST['title'];
if(isset($_POST['notice']) == NULL){
    $notice = 0;
} else{
    $notice = 1;
}
echo $notice;
$name = $_POST['name'];
$memo = $_POST['editor1'];
$pass = $_POST['pass'];
$wdate = date("Y/m/d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$sql = "insert into board(board_title, board_name, board_memo,board_date, board_hit, board_pass, board_notice, board_ip) values ('".$title."','".$name."','".$memo."','".$wdate."',0,'".$pass."','".$notice."','".$ip."')";
mysqli_query($con,$sql);

?>
<script>
    alert("글을 등록 하였습니다");
    location.href = "list.php"
</script>