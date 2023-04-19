<?php
include "../inc/session.php";
include "../inc/login_check.php";

// DB 연결
include "../inc/dbcon.php";

// 테이블 이름
// $table_name = "members";

// 쿼리 작성
$sql = "select * from members;";
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
$page_num = 2;

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
    <title>회원 관리</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_list.css">
    <script src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../js/admin_header.js"></script>

    <script>
    function member_del(){
        var del = confirm("탈퇴처리 하시겠습니까?");
        if(del == true){
            location.href = "member_del.php?m_idx=<?php echo $m_idx; ?>";
        };

    };
    </script>
</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main class="main">
        <section class="top_box">
            <h1>회원관리</h1>
        </section>
        <section class="content1">
        <div class="table_wrap">
            <span>TOTAL<?php echo $total; ?></span>
            <table class="table">
                <tr>
                    <th>IDX</th>
                    <th>NAME</th>
                    <th>ID</th>
                    <th>연락처</th>
                    <th>주소</th>
                    <th>이메일</th>
                    <th>생년월일</th>
                    <th>가입일</th>
                    <th>관리</th>
                </tr>
        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from members order by idx limit $start, $list_num;";  // 최근 게시물이 가장 최상단이도록 내림차순으로 출력 순서 변경(order by)
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $send = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(게시물 번호 역순)
          //  공식 : 전체데이터 - (현재 페이지 번호-1)*페이지당 보이는 목록 개수
            $i = $start +1;
            while($array = mysqli_fetch_array($send)){
        ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $array["u_name"]; ?></td>
                        <td><?php echo $array["u_id"]; ?></td>
                        <td><?php echo $array["mobile"];  ?></td>
                        <?php $addr = $array["ps_code"]." ".$array["addr_b"]." ".$array["addr_d"]; ?>
                        <td><?php echo $addr;  ?></td>
                        <td><?php echo $array["email"];  ?></td>
                        <td><?php echo $array["birth"];  ?></td>
                        <td><?php echo $array["join_date"];  ?></td>
                        <td>
                            <a href="member_edit.php?m_idx=<?php echo $array["idx"]; ?>">수정</a>
                        </td>
                        <td>
                            <a onclick="member_del()" href="member_del.php?m_idx=<?php echo $array["idx"]; ?>">삭제</a>
                        </td>
                    </tr>
                    <?php
                            $i++; 
                        }; 
                    ?>            
            </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
    <a href="list.php?page=1">이전</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
    <a href="list.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="list.php?page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>
    </p>
    </main>
</body>
</html>
<?php mysqli_close($dbcon); ?>