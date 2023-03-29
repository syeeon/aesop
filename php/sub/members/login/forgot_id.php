<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디/비밀번호 찾기</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/login/forgot_id.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script type="text/javascript" src="../../../../js/sub/forgot_id.js"></script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="title">
            <h1>FORGOT ID/PASSWORD</h1>
            <p>잃어버린 아이디와 비밀번호를 찾아드립니다.</p>
        </section>
        <section class="wrap">
            <div class="white_box">
                <div class="txt txt_box">
                    <h2>본인확인용 정보로 찾기</h2>
                    <p>
                        회원가입 시, 입력하신 회원 정보 또는 본인인증으로 아이디와 비밀번호를 확인하실 수 있습니다.
                        <br>아이디와 비밀번호는 가입 시 적어주신 이메일로 보내드립니다.
                    </p>
                </div>
                <div class="txt">
                    <form class="form_box" name="form_box" action="insert.php" method="post" onsubmit="return formCheck()" >
                        <fieldset>
                            <legend class="blind">아이디&비밀번호 찾기</legend>
                            <div class="input_box">
                                <span class="text_wrap">
                                    <input type="text" id="u_name" name="u_name" placeholder="이름" class="name">
                                    <span id="err_name" class="err_txt"></span>
                                </span>
                                <span class="text_wrap">
                                    <input type="email" id="u_email" name="u_email" placeholder="이메일주소" class="name">
                                    <span id="err_email" class="err_txt"></span>
                                </span>
                            </div>
                            <button type="submit" class="btn">확인</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>