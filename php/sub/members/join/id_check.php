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
    <form name="id_check" action="id_check_result.php" method="get">
        <fieldset>
            <legend>아이디 검색</legend>
            <p>
                <label for="userId">입력</label>
                <input type="text" name="userId" id="userId" value="<?php echo $u_id; ?>">
                <div> <?php echo $u_id; ?></div>
                <button type="submit">버튼</button>
            </p>
        </fieldset>
    </form>
    
</body>
</html>