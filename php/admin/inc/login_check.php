<?php

if($login_id != "admin"){
    echo "<script text/javascript>
    alert('관리자 로그인이 필요합니다.');
    location.href= '../login/login.php';
    </script>";
}


?>
