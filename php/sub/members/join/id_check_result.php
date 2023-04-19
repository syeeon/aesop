<?php 

$u_id = $_POST["u_id"];

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>id_check</title>
    <style type="text/css">
        body,input,button{
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div>
        <p> <?php echo $u_id; ?> </p>
        <p>사용이 가능합니다.</p>
        <button onclick="javascript:window.close()">확인</button>
    </div>
    
</body>
</html>