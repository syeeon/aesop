<?php
include  "../../inc/session.php";
include  "../../inc/dbcon.php";

$q_idx = $_GET["q_idx"];

$sql = "select * from board where idx= $q_idx;";

$send = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($send);


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F&A</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/login/member_chk.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../../js/common/basic.js"></script>
    <script>
        function boardCheck(){
            let pwd = document.getElementById("pwd");
            let login_pwd = "<?php echo $login_pwd; ?>";
            
            if(!pwd.value){
                var err = document.getElementById("err_pwd")
                err.innerHTML = "\* 비밀번호를 입력해주세요."
                pwd.focus();
                return false;
            } else if (pwd.value !== login_pwd) {
                var err = document.getElementById("err_pwd");
                err.innerHTML = "\* 비밀번호가 틀렸습니다.";
                pwd.focus();
                return false;
            } else {
                return true;
            }
        };        
    </script>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main class="main">
        <section class="content">
            <h1>PASSWORD CHECK</h1>
            <p>비밀번호는 타인에게 노출되지 않도록 주의해주세요.</p>
        </section>
        <div class="correct">
            <form name="board_formCheck" onsubmit="return boardCheck()" action="show_write.php?q_idx=<?php echo $q_idx; ?>" method="post">
                <fieldset>
                    <legend class="blind">비밀번호 재확인</legend>
                        <div class="input_box">
                            <span>비밀번호</span>
                            <input type="password" id="pwd" name="pwd" class="txt_box">
                            <span id="err_pwd" class="err_txt"></span>
                        </div>
                    <div class="btn_box">
                        <button class="btn_1" type="submit">확인</button>
                        <button class="btn_2" type="button" onclick="history.back()">취소</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>   
    <?php include "../../../common/footer.php" ?>
</body>
</html>
<?php mysqli_close($dbcon); ?>