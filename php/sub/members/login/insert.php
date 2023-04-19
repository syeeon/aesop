<?php

session_start();

// 데이터 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
// echo $u_id." / ".$pwd;

//DB 연결
include "../../inc/dbcon.php";

//쿼리 작성
$sql = "select idx, u_name, u_id, pwd from members where u_id = '$u_id';";
// echo $sql;
// exit;
//쿼리 전송
$send = mysqli_query($dbcon, $sql);

// select - DB에서 데이터 가져오기
$num = mysqli_num_rows($send);
// echo $num;
// exit;

if(!$num){
    echo "
    <script type='text/javascript'>
    alert('일치하는 아이디가 없습니다.');
    history.back();
    </script>";
} else{
    $array = mysqli_fetch_array($send);
    $login_pwd = $array["pwd"];

    if($pwd != $login_pwd){
        echo "
        <script type='text/javascript'>
        alert('비밀번호가 일치하지 않습니다.');
        location.href = 'login.php';
        </script>";
    } else{
        
        // 세션 변수 생성
        $_SESSION["login_idx"] = $array["idx"];
        $_SESSION["login_name"] = $array["u_name"];
        $_SESSION["login_id"] = $array["u_id"];
        $_SESSION["login_pwd"] = $array["pwd"];

        // echo $_SESSION["login_idx"];
        // echo $_SESSION["login_name"];
        // echo $_SESSION["login_id"];
        // echo $_SESSION["login_pwd"];
        // exit;
        echo "
        <script type='text/javascript'>
        alert('{$u_id}.님 안녕하세요 :)');
        location.href = 'login_ok.php';
        </script>";
    }; 
};

// DB 종료
mysqli_close($dbcon);

//리디랙션
echo "
    <script type='text/javascript'>
    location.href='login_ok.php';
    </script>
";

?>