<?php

include '../../inc/session.php';
include "../../inc/login_check.php";

$pwd = $_POST["pwd"];
// echo $pwd;
// exit;
include '../../inc/dbcon.php';

$sql = "select * from members where idx = '$login_idx';";

$send = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($send);

if($pwd != $login_pwd){
    echo "
    <script type='text/javascript'>
    alert('비밀번호가 일치하지 않습니다.');
    location.href='member_chk.php';
    </script>
    ";
};
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>정보 수정</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/join/join.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></>
    <script src="../../../../js/common/basic.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="../../../../js/sub/member_edit.js"></script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="join_box">
            <section class="content1">
                <h1>EDIT ACCOUNT</h1>
            </section>
            <section class="content2">
                <form name="" action="edit.php" method="post" onsubmit= "return editCheck()">
                    <fieldset>
                        <legend class="blind">정보수정</legend>
                            <h2 class="title">회원 정보</h2>
                                <div class="input_box">
                                <input type="hidden" name="idx" value="<?php echo $array["idx"]; ?>">
                                    <label for="u_name" class="c_title">이름</label>
                                     <span><?php echo $array["u_name"]; ?></span>
                                </div>
                                <div class="input_box">
                                    <label for="u_id" class="c_title">아이디</label>
                                    <span class="name"><?php echo $array["u_id"]; ?></span>
                                </div>
                                <div class="input_box">
                                    <label for="pwd" class="c_title">비밀번호</label>
                                    <span class="text_wrap">
                                        <input type="password" id="pwd" name="pwd" class="txt_box" value="">
                                        <span class="exp">비밀번호는 4~16자로 입력해 주세요.</span>
                                        <span id="err_pwd" class="err2_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="pwd_chk" class="c_title">비밀번호 확인</label>
                                    <span class="text_wrap">
                                        <input type="password" id="pwd_chk" name="pwd_chk" class="txt_box">
                                        <span id="err_pwd_chk" class="err_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="mobile" class="c_title">연락처</label>
                                    <span class="text_wrap">
                                        <input type="text" id="mobile" name="mobile" class="txt_box" value="<?php echo $array["mobile"] ?>">
                                        <span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                        <span id="err_mobile" class="err2_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="address1" class="c_title">우편번호</label>
                                    <input type="text"  id="sample6_postcode" name="sample6_postcode" size="8px" class="short_txt_box"  value="<?php echo $array["ps_code"] ?>">
                                    <button type="button" class="chk_btn" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">우편번호 검색</button>
                                </div>
                                <div class="input_box"> 
                                    <label for="sample6_address" class="c_title">기본주소</label>
                                    <input type="text" id="sample6_address" name="sample6_address" class="txt_box" value="<?php echo $array["addr_b"] ?>">
                                </div>
                                <div class="input_box">
                                    <label for="sample6_detailAddress" class="c_title">상세주소</label>
                                    <input type="text" id="sample6_detailAddress" name="sample6_detailAddress" class="txt_box" value="<?php echo $array["addr_d"] ?>">
                                </div>

                                <?php
                                $email = explode("@", $array["email"]);
                                 ?>
                                <div class="input_box">
                                    <label for="email_id" class="c_title">이메일</label>
                                    <span class="text_wrap">
                                        <input type="text" id="email_id" name="email_id" class="txt_box name" value="<?php echo $email[0] ?>"> @
                                        <input type="text" id="email_dns" name="email_dns" class="txt_box name" value="<?php echo $email[1] ?>">
                                        <select  id="email_sel" onchange="change_email()" class="txt_box">
                                            <option value="">직접입력</option>
                                            <option value="naver.com" class="box" >네이버</option>
                                            <option value="hanmail.net">다음</option>
                                            <option value="gmail.com">구글</option>
                                        </select>
                                        <span id="err_email" class="err_txt"></span>
                                    </span>
                                </div>
                                <?php
                                $birth = str_replace("-", "", $array["birth"]);
                                 ?>
                                <div class="input_box">
                                    <label for="birth" class="c_title">생년월일</label>
                                    <input type="text" id="birth" name="birth" class="txt_box" value="<?php echo $array["birth"] ?>">
            </section>
                <div class="button_wrop">
                    <button class="accept" type="submit">확인</button>
                    <button class="cancel" type="reset" onclick="location.href='login_ok.php'">취소</button>
                    <button class="cancel" type="reset" onclick="member_del()">회원탈퇴</button>
                </div>
                    </fieldset>
                </form>
        </section>                    
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>
<?php mysqli_close($dbcon); ?>