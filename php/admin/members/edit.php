<?php 
include "../inc/session.php";


// 값 가져오기

$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$email_id = $_POST["email_id"];
$email_dns = $_POST["email_dns"];
$email = $email_id."@".$email_dns;
$m_idx = $_GET["m_idx"];

//값 확인해보기
// echo "<p> 이름 : " .$login_name."</p>";
// echo "<p> 아이디 : " .$login_id."</p>";
// echo "<p> 비밀번호 : " .$pwd."</p>";
// echo "<p> 연락처 : " .$mobile."</p>";
// echo "<p> 우편번호 : " .$ps_code."</p>";
// echo "<p> 기본주소 : " .$addr_b."</p>";
// echo "<p> 상세주소 : " .$addr_d."</p>";
// echo "<p> 이메일 : " .$email."</p>"; 
// echo "<p> idx : " .$m_idx."</p>"; 
// exit;

//데이터 연결하기


include "../inc/dbcon.php";

// 쿼리 작성하기 ()
// $sql = "insert into members(u_name, u_id, pwd, mobile, ps_code, addr_b, addr_d, email, birth, join_date) values('$u_name', '$u_id', '$pwd', '$mobile', '$ps_code', '$addr_b', '$addr_d', '$email', '$birth', '$join_date');";
$sql = "update members set pwd='$pwd', mobile='$mobile', ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', email='$email' where idx=$m_idx;";
$keppPwd = "update members set mobile='$mobile', ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', email='$email' where idx=$m_idx;";

// echo $sql;
// exit;

// echo $keppPwd;
// exit;

if($sql){
    mysqli_query($dbcon, $sql);
} else{
    mysqli_query($dbcon, $keepPwd);
};

//쿼리 전송

mysqli_query($dbcon, $sql);


//DB 접속 종료
mysqli_close($dbcon);

// 리디랙션
echo "<script type='text/javascript'>;
    alert('수정이 완료되었습니다')
    location.href='list.php?m_idx=$m_idx; ?>';
    </script>
    ";
?>