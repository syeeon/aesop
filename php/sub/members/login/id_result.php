<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디/비밀번호 찾기</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/login/id_result.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../../js/common/basic.js"></script>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="title">
            <h1>ID/FW RESULT</h1>
            <p>회원 가입 시, 입력하신 회원정보 또는 본인인증으로 아이디와 비밀번호를 확인할 수 있습니다.
                <br>아이디와 비밀번호는 가입 시 적어주신 이메일로 보내드립니다.</p>
        </section>
        <div class="wrap">
            <div class="white_box">
                <p>메일로 아이디와 임시비밀번호가 발송되었습니다. </p>
                <button type="button" class="btn" onclick="location.href='login.php'">로그인</button>
            </div>
        </div>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>