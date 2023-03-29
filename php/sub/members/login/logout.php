<?php
session_start();

unset($_SESSION["login_idx"]);
unset($_SESSION["login_name"]);
unset($_SESSION["login_id"]);
unset($_SESSION["login_pwd"]);

echo "
    <script type=\"text/javascript\">
        alert('로그아웃이 완료됐습니다.')
        location.href=\"../../../index.php\";
    </script>
";
?>