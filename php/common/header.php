<?php

include "../../inc/session.php";
?>
<header id="header" class="header">
    <div class="header_wrap">
        <h1 class="logo">
            <a href="/syeeon/php/index.php">이솝</a>
        </h1>

        <nav class="gnb">
            <h2 class="blind">주요 메뉴</h2>
            <ul>
                <li class="menu n1"><a class="underline-hover-effect" href="#">BRAND</a></li>
                <li class="menu n2"><a class="underline-hover-effect" href="/syeeon/php/sub/product/shop.php">SHOP</a>
                    <ul class="two_dep dep_1">
                        <li><a href="#" class="hover-effect">SKIN CARE</a></li>
                        <li><a href="#" class="hover-effect">BODY&HAND</a></li>
                        <li><a href="#" class="hover-effect">HAIR</a></li> 
                        <li><a href="#" class="hover-effect">FRAGRANCE</a></li>
                        <li><a href="#" class="hover-effect">HOME</a></li> 
                        <li><a href="#" class="hover-effect">KITS&TRAVEL</a></li> 
                    </ul>
                </li>
                <li class="menu n3"><a class="underline-hover-effect" href="#">GIFTS</a></li>
                <li class="menu n4"><a class="underline-hover-effect" href="/syeeon/php/sub/members/notice/notice.php">INFO</a>
                    <ul class="two_dep dep_2">
                        <li><a class="hover-effect" href="/syeeon/php/sub/members/notice/notice.php">NOTICE</a></li>
                        <li><a class="hover-effect" href="/syeeon/php/sub/members/board/list.php">F&A</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div class="top_menu">
            <h2 class="blind">사용자 메뉴</h2>
            <ul>
                <li class="menu n1">        
                    <div>
                        <form name="searhForm" action="" method="get">
                            <fieldset>
                            <legend class="blind">검색</legend>
                            <input type="text" class="n1_input" placeholder="SEARCH">
                            <button type="button" class="blind">검색</button>
                            </fieldset>
                        </form>
                    </div>
                </li>
                <?php if($login_id){  ?>
                <li class="menu n2"><a class="underline-hover-effect" href="/syeeon/php/sub/members/login/login_ok.php">MY AESOP</a></li>
                <?php } if(!$login_id){ ?>
                <li class="menu n2"><a class="underline-hover-effect" href="/syeeon/php/sub/members/login/login.php">LOGIN</a></li>
                <?php } if($login_id == "admin"){ ?>
                <li class="menu n3"><a class="underline-hover-effect" href="/syeeon/php/admin/index.php">ADMIN</a></li>
                <?php };  ?>
                <li class="menu n3"><a class="underline-hover-effect"  href="/syeeon/php/sub/product/cart/cart_none.php">CART(0)</a></li>
            </ul>
        </div>
        <div class="nav_bg"></div> 
    </div>
</header>