<?php
include "../../config/db.php";

$title = $_POST['title'];
$memo = $_POST['memo'];
$date = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$tmpfile = $_FILES['file']['tmp_name']; //임시파일명
$o_name = $_FILES['file']['name']; //원래파일명
$filename = iconv("UTF-8","EUC-KR",$_FILES['file']['name']); //한글깨짐 방지(입력캐릭터셋,변환하고자하는 캐릭터셋)

$folder = "upload/".$filename;
move_uploaded_file($tmpfile,$folder);

$sql = "insert into notice (board_title,board_memo,board_date,board_hit,board_ip,file) values('".$title."','".$memo."','".$date."',0,'".$ip."','".$o_name."')";
mysqli_query($con,$sql);
?>

<script>
    alert('공지글을 등록했습니다.');
    location.href="notice_list.php";
</script>
