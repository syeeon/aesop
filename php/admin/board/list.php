<?php

include "../inc/session.php";
include "../inc/login_check.php";

include "../inc/dbcon.php";

$sql = "select * from board;";

// echo $sql;
// exit;

$send = mysqli_query($dbcon, $sql);

$total = mysqli_num_rows($send);

// echo $total;
// exit;

// paging : 한 페이지 당 보여질 목록 수
$list_num = 10;

// paging : 한 블럭 당 페이지 수
$page_num = 5;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>



<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_list.css">
    <script type="text/javascript" src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../js/common/basic.js"></script>
</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main class="main">
        <section class="top_box">
            <h1>F&A</h1>
        </section>
        <section class="table_wrap">
            <table class="table">
                <caption class="blind">문의사항</caption>
                <thead>
                    <div class="title">
                        <th class="table_s">번호</th>
                        <th class="table_l">제목</th>
                        <th class="table_s">작성자</th>
                        <th class="table_m">문의날짜</th>
                        <th class="table_s">문의상태</th>
                    </div>
                </thead>
                <tbody>
                <?php
                // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
                $start = ($page - 1) * $list_num;

                // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
                // limit 몇번부터, 몇 개
                $sql = "select * from board order by idx desc limit $start, $list_num;";  // 최근 게시물이 가장 최상단이도록 내림차순으로 출력 순서 변경(order by)
                // echo $sql;
                /* exit; */

                // DB에 데이터 전송
                $send = mysqli_query($dbcon, $sql);

                // DB에서 데이터 가져오기
                // pager : 글번호(게시물 번호 역순)
            //  공식 : 전체데이터 - (현재 페이지 번호-1)*페이지당 보이는 목록 개수
                $i = $total - (($page - 1)* $list_num);
                while($array = mysqli_fetch_array($send)){
            ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td class="tb_left" onclick="location.href='show_write.php?q_idx=<?php echo $array["idx"]; ?>'"><?php echo $array["q_title"]; ?></td>
                        <td><?php echo $array["writer"]; ?></td>
                        <td><?php echo $array["q_date"]; ?></td>
                        <td><?php echo $array["done"]; ?></td>
                        <td class="blind"><?php echo $array["cnt"]; ?></td>
                    </tr>

                <?php
                        $i--;
                };
                ?>
                    
                </tbody>
            </table>

            <button type="button" onclick="location.href='write.php'">글쓰기</button>
        

            <section class="bottom_btn">
                <select class="btn1" name="select" id="select">
                    <option value="" selected>선택</option>
                    <option value="">이름</option>
                    <option value="">제목</option>
                    <option value="">내용</option>
            </select>      

            <form name="" action="" method="" class="btn2">
                <fieldset>
                    <legend class="blind">검색</legend>
                    <input type="text">
                    <button type="button">검색</button>
                </fieldset>
            </form>
        </section>
    </main>
</body>
</html>
<?php mysqli_close($dbcon); ?>