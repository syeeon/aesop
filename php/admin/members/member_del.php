<?php

$m_idx = $_GET["m_idx"];

include '../inc/dbcon.php';

$sql = "delete from members where idx = $m_idx;";

$send = mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type='text/javascript'>
    alert('정상적으로 탈퇴가 되었습니다.');
    location.href='list.php';
    </script>
";
?>