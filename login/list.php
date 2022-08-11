<?php
include "../config/db.php";

$sql = "select * from member order by user_idx desc";
$result = mysqli_query($con, $sql);
//$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { 
            width: 500px;
            border: 1px solid black
        }
        td {
            text-align: center;
            height: 50px;
        }
    </style>
</head>
<body>
    <table>
        <caption><h2>회원목록</h2></caption>
        <tr>
            <th>번호</th>
            <th>아이디</th>
            <th>이름</th>
            <th>등록일</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['user_idx'];?></td>
            <td><?php echo $row['user_id'];?></td>
            <td><?php echo $row['user_name'];?></td>
            <td><?php echo $row['user_date'];?></td>
        </tr>
        <?php
        }
        ?>

    </table>
    <a href="login.html">회원가입</a>
</body>
</html>