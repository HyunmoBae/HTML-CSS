<?php
include "../config/db.php"
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
            width: 750px;
            margin: 0 auto;
        }
        th {
            background-color:#333;
            height: 40px;
            color: white;
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
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </table>
</body>
</html>