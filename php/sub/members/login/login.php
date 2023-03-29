<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/login/login.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script type="text/javascript" src="../../../../js/sub/login.js"></script>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="content1">
            <h1>AESOP LOGIN</h1>
            <p>로그인 하시면 회원님의 다양한 멤버십 혜택을 누리실 수 있습니다.</p>
        </section>
        
        <div class="box_wrap">
           <section class="content content2">
               <h2 class="title">회원 로그인</h2>
                <form name="loginChk_form" action="insert.php" method="post" onsubmit="return loginChk()">
                    <fieldset>
                        <legend class="blind">로그인</legend>
                        <div class="form1_wrap">
                            <div class="form1_box">
                                <div class="input_box">
                                    <input type="text" id="u_id" name="u_id" placeholder=" 아이디" class="name">
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
                        
                        <p class="blind">외부 경로 로그인</p>
                        <div class="outside_wrap">
                            <div class="outside_box">
                                <a href="https://nid.naver.com/nidlogin.login?mode=form&url=https%3A%2F%2Fwww.naver.com">
                                    <img class="outside_login" src="../../../../img/sub/login/btn_nav.jpg" alt="네이버로 로그인">
                                </a>
                            </div>
                            <div class="outside_box">
                                <a href="https://accounts.kakao.com/login?continue=https%3A%2F%2Fkauth.kakao.com%2Foauth%2Fauthorize%3Fresponse_type%3Dcode%26redirect_uri%3Dhttp%253A%252F%252Fwww.huxley.co.kr%252Flist%252FAPI%252Flogin_kakao.html%26state%3Ddf05a531cf6cba585bfb0fcdf73ee30dSET_HTTPS%26through_account%3Dtrue%26client_id%3Ded86218d51ba9aff3d031eaf1cc9da75">
                                    <img class="outside_login" src="../../../../img/sub/login/btn_kak.jpg" alt="카카오톡으로 로그인">
                                </a>
                            </div>
                            <div class="outside_box">
                                <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=2032826713712391&kid_directed_site=0&app_id=2032826713712391&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Fwww.huxley.co.kr%252Flist%252FAPI%252Flogin_facebook.html%26client_id%3D2032826713712391%26state%3Dd46ab1f7efc37e9ca772182e36c5878c%26scope%3Demail%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D5d515c3e-bbbf-496e-945f-38c3dd4040e8%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.huxley.co.kr%2Flist%2FAPI%2Flogin_facebook.html%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dd46ab1f7efc37e9ca772182e36c5878c%23_%3D_&display=page&locale=ko_KR&pl_dbl=0">
                                    <img class="outside_login" src="../../../../img/sub/login/btn_fb.jpg" alt="페이스북으로 로그인">
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
                    <div class="txt_wrap">
                        <div class="txt_box">
                            <p class="txt">아이디/비밀번호를 잊어버리셨나요?</p>
                            <p class="sub_txt">회원님의 아이디/비밀번호를 찾아드립니다.</p>
                        </div>
                        <button class="btn" type="button" onclick="location.href='forgot_id.php'">아이디 비밀번호 찾기</button>
                    </div>
                    <div class="txt_wrap2">
                        <div class="txt_box2">
                            <p class="txt">회원으로 가입하시면</p>
                            <p class="sub_txt">다양한 쿠폰/포인트 등 혜택을 받으실 수 있습니다.</pclass=sub_txt>
                        </div>
                        <button class="btn" type="button" onclick="location.href='../join/join.php'">회원가입하기</button>
                    </div>
            </section>
            <div class="content_line">
                <section class="content content3">
                    <h2 class="title">비회원 주문(주문조회)</h2>
                    <form name="form2" action="insert.php" method="post" onsubmit ="return nonMember()">
                        <fieldset>
                            <legend class="blind">비회원 주문</legend>
                            <div class="form2_wrap">
                                <div class="form2_box">
                                    <div class="input_box">
                                        <input type="text" id="orderer" name="orderer" placeholder=" 주문자 명">
                                        <br><span id="err_odr" class="err_txt"></span>
                                    </div>
                                    <div>
                                        <input type="text" id="odr_num" name="odr_num" placeholder=" 주문번호">
                                        <br><span id="err_num" class="err_txt"></span>
                                    </div>
                                </div>
                                <div class="form2_box">
                                    <button class="btn_2" type="submit">주문조회</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <p class="txt">주문번호를 모르실 경우에는 주문 시 등록한 메일로 주문번호가 이미 전송 되었으니 확인하시기 바랍니다.</p>
                </section>
            </div>
        </div>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>