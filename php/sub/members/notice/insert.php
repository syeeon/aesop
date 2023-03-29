<?php 

include "../../inc/session.php";
// 값 가져오기
$cate = $_POST["cate"];
$ask = $_POST["ask"];
$answer = $_POST["answer"];



// 가입 일자 구하기
$w_date = date("Y-m-d");

//값 확인해보기
// echo "<p> 아이디 : " .$login_id."</p>";
// echo "<p> 카테고리 : " .$cate."</p>";
// echo "<p> 제목 : " .$ask."</p>";
// echo "<p> 내용 : " .$answer."</p>";
// echo "<p> 비밀번호 : " .$w_date."</p>";
// exit;

//데이터 연결하기
include "../../inc/dbcon.php";

// 쿼리 작성하기
$sql = "insert into notice(login_id, cate, ask, answer, w_date) values('$login_id', '$cate', '$ask', '$answer', '$w_date');";

// echo $sql;
// exit;


// 데이터 베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>
    location.href='notice.php';
    </script>
    ";
?>