<?php 
include "../inc/session.php";

$q_idx = $_GET["q_idx"];

include "../inc/dbcon.php";

$sql = "select * from board where idx = $q_idx";

// echo $sql;
// exit;

$send = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($send);

$cnt = $array["cnt"] +1;
$sql = "update board set cnt= $cnt where idx = $q_idx;";

// echo $sql;
// exit;

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&A</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/sub/members/board/show_write.css">
    <script src="../js/admin_header.js"></script>
</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>질문을 남겨주시면 친절하고 신속한 답변드리겠습니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='../notice/notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='list.html'">Q&A</button>
            </div>
        </section>

        <div class="write_wrap">
            <div class="write_box">
                <table>
                    <caption class="blind">게시글 보기</caption>
                    <thead>
                        <tr class="write_title">
                            <th><?php echo $array["q_title"]; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="td_line">
                            <td class="icon1"><?php echo $array["writer"]; ?></td>
                            <td class="icon2"><?php echo $array["q_date"]; ?></td>
                            <td class="icon3"><?php echo $cnt; ?></td>
                        </tr>
                        <tr class="tb_line"></tr>
                        <tr class="content">
                            <td><?php echo $array["q_content"]; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn_left">
                    <button class="riv" onclick="location.href='modify.php?q_idx=<?php echo $q_idx; ?>'">수정</button>
                    <button class="riv" onclick="location.href='delete.php?q_idx=<?php echo $q_idx; ?>'">삭제</button>
                </div>
                <div class="btn_right">
                    <button class="btn btn_2" type="button" onclick="location.href='list.php'">목록보기</button>
                </div>
            </div>
        </div>

        <div class="btm_wrap">
            <div class="btm_box">
                <table>
                    <caption class="blind">게시글 목록</caption>
                    <thead>
                        <tr class="btm_title">
                            <th class="btn_con">CONTENT</th>
                            <th class="btn_sub">NAME</th>
                            <th class="btn_sub">DATE</th>
                            <th class="btn_sub">HITS</th>
                        </tr>
                    </thead>
                        <tbody>
                            <tr class="btm_val">
                                <td><?php echo $array["q_title"]; ?></td>
                                <td><?php echo $array["writer"]; ?></td>
                                <td><?php echo $array["q_date"]; ?></td>
                                <td><?php echo $cnt; ?></td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
<?php mysqli_close($dbcon); ?>