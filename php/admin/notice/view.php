<?php 
include "../inc/session.php";

$n_idx = $_GET["n_idx"];

// echo $n_idx;
// exit;
include "../inc/dbcon.php";

$sql = "select * from notice where idx = $n_idx;";

// echo $sql;
// exit;

$send = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($send);


// 조회수 업데이트

$cnt = $array["cnt"] +1;
$cntSql = "update notice set cnt = $cnt where idx = $n_idx;";

mysqli_query($dbcon, $cntSql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICE</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/sub/members/board/write.css">
    <script type="text/javascript" src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../js/admin_header.js"></script>
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
                            <th>작성자</th>
                            <td><?php echo $login_id;  ?></td>
                        </div>
                        <div class="input_box">
                            <span>날짜</span>
                            <td><?php echo $array["w_date"];  ?></td>
                        </div>
                        <div class="input_box">
                            <span>조회수</span>
                            <?php echo $cnt;  ?>
                        </div>
                        <div class="input_box">
                            <span>카테고리</span>
                            <?php echo $array["cate"]; ?>
                        </div>
                        <div class="input_box">
                            <span>ASK</span>
                            <?php echo $array["ask"]; ?>
                        </div>
                        <div class="input_box">
                            <span>ANSWER</span>
                            <?php echo $array["answer"]; ?>
                        </div>
                        <div class="btn_right">
                            <button class="btn btn_1" type="button" onclick="location.href='modify.php?n_idx=<?php echo $n_idx; ?>'">수정하기</button>
                            <button class="btn btn_2" type="button" onclick="location.href='notice.php'">목록보기</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>