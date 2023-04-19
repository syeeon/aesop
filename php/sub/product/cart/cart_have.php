<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/product/cart/cart_have.css">
    <script src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script src="../../../../js/common/basic.js"></script>
    <script src="../../../../js/sub/cart_have.js"></script>
    <title>장바구니</title>
</head>
<body>
    <?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="cart">
            <h1>CART</h1>
            <p>장바구니에 담겨진 상품을 확인하실 수 있습니다. </p>
        </section>
        <section class="cartbox_wrap">
            <a class="return" href="../shop.php">Return to shop </a>
            <h2>CART</h2>
            <ul class="cart_box">
                <li class="cart_list">
                    <div class="img_box">
                        <img src="../../../../img/sub/shop/n1.png" alt="레저렉션 아로마틱 핸드 워시">
                    </div>
                    <div class="cart_txt">
                        <span class="list">레저렉션 아로마틱 핸드 워시</span>
                        <a href="#" class="list">DOWN</a>
                        <p class="list up_down count">1</p>
                        <a href="#" class="list plus">UP</a>
                        <button type="reset" class="del list">REMOVE</button>
                        <span class="unitprice">46,000</span>
                    </div>
                </li>
            </ul>
            <span class="price">
                <span>
                    <label>소계</label>
                    <span class="total">46,000</span>
                </span>
                <span><label>배송비</label><span>0</span></span>
                <span><label>TATAL</label><span>46,000</span></span>
                <button type="submit" class="btn" onclick="location.href='../pay.php'">결제하기 </button>
            </span>
        </section>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>