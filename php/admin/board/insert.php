<?php 

include "../inc/session.php";
// 값 가져오기
$q_pwd = $_POST["q_pwd"];
$q_title = $_POST["q_title"];
$q_content = $_POST["q_content"];
$q_idx = $_GET["q_idx"];



// 작성 일자 구하기
$q_date = date("Y-m-d");

//값 확인해보기
// echo "<p> 작성자 : " .$login_id."</p>";
// echo "<p> 비밀번호 : " .$q_pwd."</p>";
// echo "<p> 제목 : " .$q_title."</p>";
// echo "<p> 내용 : " .$q_content."</p>";
// echo "<p> 작성일 : " .$q_date."</p>";
// echo "<p> q_idx : " .$q_idx."</p>";
// exit;

//데이터 연결하기
include "../inc/dbcon.php";

// 쿼리 작성하기
$sql = "insert into board(writer, q_pwd, q_title, q_content, q_date) values('$login_id', '$q_pwd', '$q_title', '$q_content', '$q_date');";

// echo $sql;
// exit;


// 데이터 베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>
    location.href='list.php';
    </script>
    ";
?>