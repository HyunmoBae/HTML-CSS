<?php
include "config/db.php";

$user_id = $_GET['userid'];
$sql = "select * from member where user_id='".$user_id."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if ($row==0){
?>
<?php echo $user_id;?>는 사용가능한 아이디입니다.
<?php
} else {
echo $user_id;?>는 중복된 아이디 입니다.
<?php
}
?>
<button value="닫기" onclick="window.close()">닫기</button>