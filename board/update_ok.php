<?php
include "../config/db.php";

$title = $_POST['title'];
if(isset($_POST['notice']) == NULL){
    $notice = 0;
} else{
    $notice = 1;
}
$name = $_POST['name'];
$memo = $_POST['editor1'];
$pass = $_POST['pass'];

$sql = "select * from board where board_idx=".$_POST['board_idx'];
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

if ($pass == $row['board_pass']){
    $sql1 = "update board set board_title='".$title."', board_notice='".$notice."', board_name='".$name."', board_memo='".$memo."' where board_idx =".$_POST['board_idx'];
    mysqli_query($con,$sql1);
    ?>
    <script>
        alert("수정 완료");
        location.href="list.php";
    </script>
    <?php
} else {
    ?>
    <script>
    alert("비밀번호가 틀렸습니다.");
    history.back();
    </script>
    <?php
}
?>