<?php
include "../../config/db.php";

$sql = "select * from notice order by board_idx desc";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>
<body>
<div id="page-wrapper">
    <!-- 헤더 영역 -->
    <?php
    include "../header.html";
    ?>
    <!-- 메뉴 영역 -->
    <?php
    include "../menu.html";
    ?>
      <!-- 본문 영역 -->
      <div id="content">
        <!-- 본문 가운데 영역 -->
        <section id="main-section">
          <!-- 본문 첫번째 영역 -->
          <?php
          while($row=mysqli_fetch_array($result)){
          ?>
          <article>
            <!-- 본문 타이틀 -->
            <div class="article-header">
              <h1 class="article-title">
                <a href="notice_memo.php?board_idx=<?php echo $row['board_idx'];?>">
              <?php echo $row['board_title'];?></a>
            </h1>
              <p class="article-desc"><?php echo $row['board_date'] ?></p>
            </div>
            <!-- 본문 내용 -->
            <div class="article-body">
              <div class="article-img">
                <?php
                if($row['file']){
                ?>
                <img src="upload/<?php echo $row['file'];?>" class="article-body-img" />
                <?php
                } else {
                ?>
                <?php
                }
            ?>
              </div>
              <p>
                <?php
                echo $row['board_memo'];
                ?>
              </p>
            </div>
            </article>
            <?php
        }
        ?>
        <div class="notice_btn">
          <a href="notice_write.php"><input type="button" value="글등록" class="btn"></input></a>
        </div>
        </section>
        <!-- 본문 우측 영역 -->
        <?php
        include "../aside.html";
        ?>
        </div>
        <!-- 푸터 영역 -->
        <?php
        include "../footer.html";
        ?>
    </div>
  </body>
</html>