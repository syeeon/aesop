<?php


$n_idx = $_GET["n_idx"];
// echo n_idx;
// exit;

include '../inc/dbcon.php';

$sql = "delete from notice where idx = $n_idx;";

$send = mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
    <script type='text/javascript'>
    alert('삭제되었습니다.');
    location.href='notice.php';
    </script>
";


?>