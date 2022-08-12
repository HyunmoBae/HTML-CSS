<?php
include "../config/db.php";

$sql = "select * from board order by board_notice desc, board_idx desc";
$result = mysqli_query($con,$sql)
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
            border-collapse: collapse;
            width: 1000px;
            margin: 0 auto;
        }
        th {
            border: #333 solid 1px;
            background-color:beige;
            height: 40px;
            color: black;
        }
        .a {
            text-align: center;
        }
        span {
            color: red;
            font-weight: bold;
        }
        td {
            height: 35px;
            border: #333 solid 1px;
        }
        a:link {
            margin-left:10px;
            color: #333;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        a:visited {
            color:#99209B;
        }
        </style>
</head>
<body>
    <table>
    <caption><h2>게시판</h2></caption>
        <tr>
            <th width="7%">번호</th>
            <th>제목</th>
            <th width="15%">이름</th>
            <th width="15%">날짜</th>
            <th width="7%">조회수</th>
        </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            ?>
        <tr >
            <td class="a">
            <?php 
            if($row['board_notice'] ==1){
                echo "<span>공지</span>";
                }
                else {
                    echo $row['board_idx'];
                    } ?>
            </td>
            <td >
                <?php
                if(strlen($row['board_title']) > 30) {
                    $row['board_title'] = str_replace($row['board_title'],mb_substr($row['board_title'],0,30,"utf-8")."...",$row['board_title']);
                }
                ?>
                <a href="view.php?board_idx=<?php echo $row['board_idx'];?>">
                    <?php echo $row['board_title'] ?>
                </a>
            </td>

            <td class="a"><?php echo $row['board_name'] ?></td>
            <td class="a"><?php echo substr($row['board_date'],0,10) ?></td>
            <td class="a"><?php echo $row['board_hit'] ?></th>
        </tr>
        <?php
    }
        ?>
    </table>
</body>
</html>