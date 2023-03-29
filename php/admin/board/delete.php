<?php

$q_idx = $_GET["q_idx"];

include '../inc/dbcon.php';

$sql = "delete from board where idx = $q_idx;";

$send = mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type='text/javascript'>
    alert('정상적으로 삭제되었습니다.');
    location.href='list.php';
    </script>
";
?>