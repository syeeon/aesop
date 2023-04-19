<?php

include '../inc/session.php';
include "../inc/login_check.php";

$m_idx = $_GET["m_idx"];
// echo $m_idx;
// exit;
include '../inc/dbcon.php';

$sql = "select * from members where idx = $m_idx;";
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
    <title>관리자 정보 수정</title>
    <link rel="stylesheet" type="text/css" href="../../../css/admin_basic.css">
    <link rel="stylesheet" type="text/css" href="../../../css/sub/join/join.css">
    <script type="text/javascript" src="../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../js/admin_header.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script type="text/javascript" src="../../../js/sub/member_edit.js"></script>
    <script>
    function member_del(){
        var del = confirm("탈퇴처리 하시겠습니까?");
        if(del == true){
            location.href = "member_del.php?m_idx=<?php echo $m_idx; ?>";
        };
    };
    </script>
</head>
<body>
<?php include "../inc/admin_header.php" ?>
    <main id="main" class="main">
        <section class="join_box">
            <section class="content1">
                <h1>EDIT ACCOUNT</h1>
            </section>
            <section class="content2">
                <form name="" action="edit.php?m_idx=<?php echo $m_idx; ?>" method="post" onsubmit= "return editCheck()">
                    <fieldset>
                        <legend class="blind">정보수정</legend>
                            <h2 class="title">회원 정보</h2>
                                <div class="input_box">
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
                                        <span id="err_pwd" class="err_txt"></span>
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
                                        <input type="text" id="mobile" name="mobile" class="txt_box" value="<?php echo $array["mobile"]; ?>">
                                        <span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                        <span id="err_mobile" class="err_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="address1" class="c_title">우편번호</label>
                                    <input type="text"  id="sample6_postcode" name="ps_code" size="8px" class="short_txt_box"  value="<?php echo $array["ps_code"]; ?>">
                                    <button type="button" class="chk_btn" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">우편번호 검색</button>
                                </div>
                                <div class="input_box"> 
                                    <label for="sample6_address" class="c_title">기본주소</label>
                                    <input type="text" id="sample6_address" name="addr_b" class="txt_box" value="<?php echo $array["addr_b"]; ?>">
                                </div>
                                <div class="input_box">
                                    <label for="sample6_detailAddress" class="c_title">상세주소</label>
                                    <input type="text" id="sample6_detailAddress" name="addr_d" class="txt_box" value="<?php echo $array["addr_d"]; ?>">
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
                                    <span><?php echo $array["birth"]; ?></span>
                                </div>
                <div class="button_wrop">
                    <button class="accept" type="submit">확인</button>
                    <button class="cancel" type="reset" onclick="location.href='list.php'">취소</button>
                    <button class="cancel" type="reset" onclick="member_del()">회원탈퇴</button>
                </div>
                    </fieldset>
                </form>
        </section>                    
    </main>
</body>
</html>
<?php mysqli_close($dbcon); ?>