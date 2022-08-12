<?php
    include "../config/db.php";
    
    $sql1 = "update board set board_hit=board_hit +1 where board_idx =".$_GET['board_idx'];
    $result1 = mysqli_query($con,$sql1);

    $sql = "select * from board where board_idx=".$_GET['board_idx'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
            width: 1000px;
            margin: 0 auto;
            margin-top: 150px;
        }   
        .title{
            height: 100px;
            font-size: 30px;
            width: 100%;
            font-weight: bold;
        }
        .a {
            margin: 0;
            background-color: #FBFAFA;
        }
        .b {
            width: 1000px;
            margin: 0 auto;
            margin-top: 150px;
        }
        .memo {
            height: 500px;
            text-align:left ;
            padding-top: 10px;
            vertical-align: top;
        }
        a:link {
            color: #333;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        a:visited {
            color:#99209B;
        }
        span {
            width: 30px;
            height: 20px;
            background-color: skyblue;
        }
        </style>
</head>
<body>
    <table>
        <caption><h2>게시판</h2></caption>
        <tr class="a" >
            <td class="title"><?php echo $row['board_title'];?></td>
        </tr>
        <tr class="a" >
            <td>작성일 : <?php echo $row['board_date'];?>&nbsp;
            작성자 : <?php echo $row['board_name'];?>&nbsp;
            조회수 : <?php echo $row['board_hit'];?>
        </td>
    </tr>
    <tr>
            <td class="memo"><?php echo $row['board_memo'];?></td>
        </tr>
        <tr>
            <td style="text-align: center">
                <a class="c" href="list.php">목록</a>&nbsp;
                <a class="c" href="write.html">등록</a>&nbsp;
                <a class="c" href="update.php?board_idx=<?php echo $row['board_idx'];?>">수정</a>&nbsp;
                <a class="c" href="del.php?board_idx=<?php echo $row['board_idx'];?>">삭제</a>
            </td>
        </tr>
    </table>
</body>
</html>