<?php
include "../../inc/session.php";

// DB 연결
include "../../inc/dbcon.php";

// 테이블 이름
// $table_name = "notice";

// 쿼리 작성
$sql = "select * from notice;";
// echo $sql;
// exit; 

// 쿼리 전송
$send = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
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
    <title>NOTICE</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/members/notice/notice.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../../js/common/basic.js"></script>
    <script src="../../../../js/sub/notice.js"></script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>쇼핑에 필요한 정보를 신속하게 전해드립니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='../board/list.php'">Q&A</button>
            </div>
        </section>
        <div class="table_wrap">
            <table class="table">
                <th>번호</th>
                <th class="table_cate">분류</th>
                <th class="table_title">제목</th>  

        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from notice order by idx desc limit $start, $list_num;";  // 최근 게시물이 가장 최상단이도록 내림차순으로 출력 순서 변경(order by)
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

            <tr class="qst_box">
                <td><?php echo $i; ?></td>
                <td><?php echo $array["cate"]; ?></td>
                <td class="tb_left">
                    <?php echo $array["ask"]; ?>
                    <!-- 수정 : tr 사이의 div를 질문 td 안쪽으로 이동 > div로 변환 -->
                    <div class="ans_box">
                        <span class="ans">답변</span>
                        <span><?php echo $array["answer"]; ?></span>
                    </div>
                </td>
            </tr>
                    <?php
                            $i--;
                        }; 
                    ?>
            </table>

            <p class="pager">
            <?php
            // pager : 이전 페이지
            if($page <= 1){
            ?>
            <a href="notice.php?page=1">이전</a>
            <?php } else{ ?>
            <a href="notice.php?page=<?php echo ($page - 1); ?>">이전</a>
            <?php }; ?>
        
            <?php
            // pager : 페이지 번호 출력
            for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
            ?>
            <a href="notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
            <?php }; ?>
        
            <?php
            // pager : 다음 페이지
            if($page >= $total_page){
            ?>
            <a href="notcie.php?page=<?php echo $total_page; ?>">다음</a>
            <?php } else{ ?>
            <a href="notice.php?page=<?php echo ($page + 1); ?>">다음</a>
            <?php }; ?>
            </p>
        </div>
            </table>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>
<?php mysqli_close($dbcon); ?>