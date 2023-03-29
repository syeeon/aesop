<?php 
// 값 가져오기
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$ps_code = $_POST["sample6_postcode"];
$addr_b = $_POST["sample6_address"];
$addr_d = $_POST["sample6_detailAddress"];
$addr = $ps_code."".$addr_b."".$addr_d;
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;


//값 확인해보기
// echo "<p> 비밀번호 : " .$pwd."</p>";
// echo "<p> 전화번호 : " .$mobile."</p>";
// echo "<p> 우편번호 : " .$ps_code."</p>";
// echo "<p> 주소 : " .$addr_b."".$addr_d."</p>";
// echo "<p> 이메일 : " .$email."</p>"; 
// exit;

//데이터 연결하기
include "../../inc/session.php";
include "../../inc/dbcon.php";

// 쿼리 작성하기 ()
// $sql = "insert into members(u_name, u_id, pwd, mobile, ps_code, addr_b, addr_d, email, birth, join_date) values('$u_name', '$u_id', '$pwd', '$mobile', '$ps_code', '$addr_b', '$addr_d', '$email', '$birth', '$join_date');";
$sql = "update members set pwd='$pwd', mobile='$mobile', ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', email='$email' where idx=$login_idx;";



// echo $sql;
// exit;

//쿼리 전송

mysqli_query($dbcon, $sql);


//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>;
    alert('수정이 완료되었습니다')
    location.href='login_ok.php';
    </script>
    ";
?>