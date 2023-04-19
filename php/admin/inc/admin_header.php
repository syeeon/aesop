
<header id="header" class="admin_header">
    <div class="sidebar">
        <svg class="menu_icon" onclick = "admin_header()" style="fill:rgb(255,255,255)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        <svg class="close_icon" onclick = "admin_header()" style="fill:rgb(255,255,255)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        <div class="gnb_wrap">
            <h1><a href="/syeeon/php/admin/index.php">aesop</a></h1>
            <p class="admin_name">HELLO <?php echo $login_name; ?></p>
            <nav class="gnb">
                <ul>
                    <li class="border"><a href="/syeeon/php/index.php">STORE</a></li>
                    <li class="border"><a href="/syeeon/php/admin/members/list.php">회원관리</a></li>
                    <li class="border"><a href="/syeeon/php/admin/notice/notice.php">NOTICE</a></li>
                    <li class="border"><a href="/syeeon/php/admin/board/list.php">F&A</a></li>
                    <li class="logout"><a href="/syeeon/php/admin/login/logout.php">LOGOUT</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>