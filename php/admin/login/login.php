<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../css/admin/admin_login.css">
    <script src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../js/common/basic.js"></script>
    <script src="../../../js/sub/login.js"></script>
</head>
<body>
    <main id="main" class="admin_login">
        <section class="top_txt">
            <h1>AESOP ADMIN</h1>
        </section>
        <div class="box_wrap">
           <section class="content content2">
               <h2 class="title">관리자 로그인</h2>
                <form name="loginChk_form" action="insert.php" method="post" onsubmit="return loginChk()">
                    <fieldset>
                        <legend class="blind">로그인</legend>
                        <div class="form1_wrap">
                            <div class="form1_box">
                                <div class="input_box">
                                    <input type="text" id="u_id" name="u_id" placeholder=" 아이디">
                                    <br><span id="err_id" class="err_txt"></span>
                                </div>
                                <div class="input_box">
                                    <input type="password" id="pwd" name="pwd" placeholder=" 비밀번호">
                                    <br><span id="err_pwd" class="err_txt"></span>
                                </div>
                            </div>
                            <div class="form1_box">
                                <button class="btn_1" type="submit">로그인</button>
                            </div>
                        </div>
                        <div class="chk_box1">
                            <label class="box"><input type="checkbox">보안접속</label>
                            <label class="box"><input type="checkbox">아이디 저장</label>
                        </div>
                    </fieldset>
                </form>
                </section>
            </div>
        </div>
    </main>
</body>
</html>