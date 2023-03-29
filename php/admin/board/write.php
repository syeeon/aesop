<?php

include "../inc/session.php";

?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <link rel="stylesheet" type="text/css" href="../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/sub/members/board/write.css">
    <script src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../js/common/basic.js"></script>
    <script src="../../../js/sub/write.js"></script>
</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>질문을 남겨주시면 친절하고 신속한 답변드리겠습니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='../notice/notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='list.php'">Q&A</button>
            </div>
        </section>
        <div class="write_wrap">
            <div class="write_box">
                <form name="formCheck" action="insert.php" method="post" onsubmit="return formCheck()">
                    <fieldset>
                        <legend class="blind">게시물 작성</legend>
                        <hr>
                        <div class="input_box">
                            <label for="u_name" class="c_title">작성자</label>
                            <span class="name"><?php echo $login_id; ?></span>
                        </div>
                        <div class="input_box">
                            <label for="u_pwd" class="c_title">비밀번호</label>
                            <input type="password" id="u_pwd" name="q_pwd" class="txt_box">
                            <br><span id="err_pwd"  class="err_txt"></span>
                        </div>
                        <div class="input_box">
                            <label for="u_title" class="c_title">제목</label>
                            <input type="text" id="u_title" name="q_title" class="txt_box" placeholder="문의사항입니다.">
                            <br><span id="err_title"  class="err_txt"></span>
                        </div>
                        <div class="input_box">
                            <label for="u_content" class="c_title text_title">내용</label>
                            <textarea id="u_content" name="q_content" class="u_content" placeholder="내용을 입력해주세요."></textarea>
                            <br><span id="err_content"  class="err_txt"></span>
                        </div>
                        <div class="input_box">
                            <label class="file_title">첨부파일</label>
                            <div class="file_box">
                                <div class="file">
                                    <input class="upload_name1" placeholder="첨부파일">
                                    <label for="file_fir" class="file_btn">찾아보기</label>
                                    <input type="file" id="file_fir" name="file_fir" class="">
                                </div>
                                <div class="file">
                                    <input class="upload_name2" placeholder="첨부파일">
                                    <label for="file_sec" class="file_btn">찾아보기</label>
                                    <input type="file" id="file_sec" name="file_sec" class="">
                                </div>
                                <div class="file">
                                    <input class="upload_name3" placeholder="첨부파일">
                                    <label for="file_thi" class="file_btn">찾아보기</label>
                                    <input type="file" id="file_thi" name="file_thi" class="">
                                </div>
                            </div>
                        </div>
                        <div class="btn_right">
                            <br><button class="btn btn_1" type="submit">글 작성</button>
                            <button class="btn btn_2" type="button" onclick="location.href='list.php'">목록보기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
