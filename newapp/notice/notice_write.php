<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/layout.css" />
    <link rel="stylesheet" href="../css/reset.css" />
  </head>
  <body>
    <!--전체를 감싸는 태그-->
    <div id="page-wrapper">
      <!--헤더영역-->
      <?php
    include "../header.html";
    ?>
      <!--메뉴영역-->
      <?php
    include "../menu.html";
    ?>
      <!--본문영역-->
      <div id="content">
        <!--본문 가운데 영역-->
        <section id="main-section">
          <!--본문 첫번째 영역-->

          <article>
            <!--본문 타이틀-->
            <div  class="notice_write">
              <form method="post" action="notice_write_ok.php" enctype="multipart/form-data">
              <table>
                  <tr>
                      <td>제목</td>
                      <td><input type="text" name="title" class="notice_write_title" placeholder="제목을 입력하세요"></td>
                  </tr>
                  <tr>
                    <td>내용</td>
                      <td colspan="2">
                          <textarea name="memo" rows="5" class="notice_write_memo" placeholder="내용을 입력하세요"></textarea>
                      </td>
                  </tr>
                  <tr>
                      <td class="notice_view_file">사진첨부</td>
                      <td><input type="file" name="file"></td>
                  </tr>
                </table>
              </div>
          </article>

          <div class="notice_btn">
              <input type="submit" value="글등록" class="btn" />
          </div>
          </form>
        </section>
        <!--본문 우측 영역-->
        <?php
        include "../aside.html";
        ?>
      </div>
      <!--푸터영역-->
      <?php 
    include "../footer.html";
    ?>
    </div>
  </body>
</html>
