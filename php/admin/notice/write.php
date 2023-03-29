<?php 
include "../inc/session.php";
include "../inc/login_check.php";

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
    <script type="text/javascript" src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../js/common/basic.js"></script>
    <script type="text/javascript" src="../../../js/sub/notice.js"></script>

</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>NOTICE</h1>
            <p>쇼핑에 필요한 정보를 신속하게 전해드립니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='../board/list.php'">Q&A</button>
            </div>
        </section>
        <div class="write_wrap">
            <div class="write_box">
                <form name="formCheck" action="insert.php" method="post" onsubmit="return noticeForm()">
                    <fieldset>
                        <legend class="blind">게시물 작성</legend>
                        <hr>
                        <div class="input_box">
                            <span>작성자</span>
                            <?php echo $login_id;  ?>
                        </div>

                        <div class="input_box">
                            <label for="cate">카테고리</label>
                        <select name="cate" id="cate" class="cate" onchange="sel_cate()">
                            <option value="">선택하기</option>
                            <option value="회원정보">회원정보</option>
                            <option value="배송문의">배송문의</option>
                            <option value="제품문의">제품문의</option>
                            <option value="취소교환반품">취소교환반품</option>
                            <option value="주문입금결제">주문입금결제</option>
                            <option value="쿠폰적립금">쿠폰적립금</option>
                        </select>
                        </div>


                        <div class="input_box">
                            <label for="ask" class="c_title">ASK</label>
                            <input type="text" id="ask" name="ask" class="txt_box">
                        </div>
                        <div class="input_box">
                            <label for="answer" class="text_title">ANSWER</label>
                            <textarea id="answer" name="answer" class="u_content"></textarea>
                        </div>

                        <div class="btn_right">
                            <br><button class="btn btn_1" type="submit">글 작성</button>
                            <button class="btn btn_2" type="button" onclick="location.href='notice.php'">목록보기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>