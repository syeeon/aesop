<?php
include "../../inc/session.php";

include "../../inc/dbcon.php";

$sql = "select * from members where idx = $login_idx;";
// echo $sql;
// exit;
$send = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($send);
// echo $array["u_name"];
// exit;

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/login/login_ok.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <title>장바구니</title>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="mypage">
            <h1>my aesop</h1>
            <p>이솝 공식페이지에서 즐거운 쇼핑하세요</p>
        </section>
        <section class="mypage_wrap">
            <div class="account_box">
                <p class="logout" onclick="location.href='logout.php'">LOGOUT</p>
                <h2>ACCOUNT</h2>
                <input type="hidden" name="idx" value="<?php echo $array["idx"]; ?>">
                <label class="txt">이름</label>
                <span class="name txt"><?php echo $array["u_name"]; ?></span>
                <a href="member_chk.php" class="txt link">회원정보 수정</a>
            </div>
            <div class="order_box">
                <h2>ORDER HISTORY</h2>
                <div class="data">
                    <label class="txt">주문내역</label>
                    <span class="history txt">0/0</span>
                    <a href="#" class="txt link">주문내역 모두보기</a>
                </div>
                <div class="data">
                    <label class="txt">쿠폰</label>
                    <span class="coupon txt">0개</span>
                    <a href="#" class="txt link">사용 가능 쿠폰 확인하기</a>
                </div>
            </div>
        </section>


    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>
<?php mysqli_close($dbcon); ?>