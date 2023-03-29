<?php 

include "../inc/session.php";
// 값 가져오기
$cate = $_POST["cate"];
$ask = $_POST["ask"];
$answer = $_POST["answer"];
$n_idx = $_GET["n_idx"];



// 작성 일자 구하기
// $w_date = date("Y-m-d");

//값 확인해보기

// echo "<p> 아이디 : " .$login_id."</p>";
// echo "<p> 카테고리 : " .$cate."</p>";
// echo "<p> 제목 : " .$ask."</p>";
// echo "<p> 내용 : " .$answer."</p>";

// exit;

//데이터 연결하기
include "../inc/dbcon.php";

// 쿼리 작성하기
$sql = "update notice set cate='$cate', ask='$ask', answer='$answer' where idx=$n_idx;"; 

// echo $sql;
// exit;


// 데이터 베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>
    location.href='view.php?n_idx=$n_idx';
    </script>
    ";




?>