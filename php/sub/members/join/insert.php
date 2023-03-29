<?php 
// 값 가져오기
$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$ps_code = $_POST["sample6_postcode"];
$addr_b = $_POST["sample6_address"];
$addr_d = $_POST["sample6_detailAddress"];
$addr = $ps_code."".$addr_b."".$addr_d;
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$birth = $_POST["birth"];


// 가입 일자 구하기
$join_date = date("Y-m-d");

// 값 확인해보기
// echo "<p> 이름 : " .$u_name."</p>";
// echo "<p> 아이디 : " .$u_id."</p>";
// echo "<p> 비밀번호 : " .$pwd."</p>";
// echo "<p> 전화번호 : " .$mobile."</p>";
// echo "<p> 우편번호 : " .$ps_code."</p>";
// echo "<p> 주소 : " .$addr_b."".$addr_d."</p>";
// echo "<p> 이메일 : " .$email."</p>"; echo "<p> 생년월일 : " .$birth."</p>";
// echo "<p> 가입일 : " .$join_date."</p>"; 
// exit;

//데이터 연결하기
include "../../inc/dbcon.php";

// 쿼리 작성하기
$sql = "insert into members(u_name, u_id, pwd, mobile, ps_code, addr_b, addr_d, email, birth, join_date) values('$u_name', '$u_id', '$pwd', '$mobile', '$ps_code', '$addr_b', '$addr_d', '$email', '$birth', '$join_date');";

// echo $sql;
// exit;


// 데이터 베이스에 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>;
    location.href='join_ok.php?userid=$u_id';
    </script>
    ";
?>