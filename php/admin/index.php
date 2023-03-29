<?php
include "inc/session.php";

if($login_id != "admin"){
    echo "
        <script type='text/javascript'>
            alert('관리자 로그인이 필요합니다');
            location.href='login/login.php';
        </script>
    ";
    exit;
}

include "inc/dbcon.php";

$sql = "select idx, u_name, u_id, pwd from members where u_id = '$u_id';";
// echo $sql;
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesop admin</title>
    <link rel="stylesheet" type="text/css" href="../../css/admin/admin_basic.css"> 
</head>
<body>
    <h1><a>aesop</a></h1>
    <div class="">
        <span>HELLO <?php echo $login_name; ?></span>
        <a href="login/logout.php">LOGOUT</a>
        <a href="members/member_chk.php">MEMBER</a>
        <a href="../index.php">STORE</a>
    </div>

    <div class="">
        <a href="members/list.php">회원관리</a>
        <a href="notice/notice.php">NOTICE</a>
        <a href="board/list.php">F&A</a>
        <a href="#">상품관리</a>
    </div>
</body>
</html>
<?php mysqli_close($dbcon); ?>