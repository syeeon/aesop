<?php
$userid = $_GET['userid'];

include "../../inc/session.php";
// echo $u_id;
// exit;
include "../../inc/dbcon.php";
$sql = "select * from members";
// echo $sql;
// exit;
$send = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($send);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/join/join_ok.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../../js/common/basic.js"></script>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main class="main">
        <div class="title">
            <h1>WELCOME</h1>
            <p>로그인을 통해 주문 내역을 확인하고 지난 구매 상품을 재구매하실 수 있습니다.</p>
        </div>
        <div class="box_wrop">
            <section class="content1">
                <h2>가입이 완료되었습니다.</h2>
                <p class="name">Aesop 가입 ID는 <?php echo $userid; ?>입니다.</p>
            </section>
            <div class="btn_box">
                <button class="btn_1" type="submit" onclick="location.href='../login/login.php'">로그인</button>
                <button class="btn_2" type="button" onclick="location.href='../login/login.php'">홈으로</button>
            </div>
        </div>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>
<?php mysqli_close($dbcon); ?>