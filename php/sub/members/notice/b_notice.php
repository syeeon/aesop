<?php
include "../../inc/session.php";

// DB 연결
include "../../inc/dbcon.php";

// 테이블 이름
// $table_name = "notice";

// 쿼리 작성
$sql = "select * from notice;";
// echo $sql;
// exit; 

// 쿼리 전송
$send = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($send);

// echo $total;
// exit;

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css"> 
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/members/notice/notice.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script type="text/javascript" src="../../../../js/sub/notice.js"></script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main class="main">
        <section class="content1">
            <h1>INFO</h1>
            <p>쇼핑에 필요한 정보를 신속하게 전해드립니다.</p>
            <div class="lnb">
                <button class="tit_btn tit1" type="button" onclick="location.href='notice.php'">NOTICE</button>
                <button class="tit_btn tit2" type="button" onclick="location.href='../board/list.php'">Q&A</button>
            </div>
        </section>

        <div class="table_wrap">
            <table class="table">
                <th>번호</th>
                <th>분류</th>
                <th>제목</th>
                    <tr class="qst_box">
                        <td>33</td>
                        <td>취소교환반품</td>
                        <td class="tb_left">
                            교환 및 반품 접수 시 제품은 어디로 보내야 하나요?
                            <!-- 수정 : tr 사이의 div를 질문 td 안쪽으로 이동 > div로 변환 -->
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>Huxley 고객센터 070-7123-0077 로 접수 후, 아래 반송주소로 보내주세요.<br>
                                반송주소 : 서울특별시 마포구 토정로 119 (상수동) 5층 노드메이슨 CS팀</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>32</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            생일 쿠폰은 언제 발행되나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>일 일주일 전에 발급되며 발급 후 15일 이내 사용 가능합니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>31</td>
                        <td>배송문의</td>
                        <td class="tb_left">
                            어떤 택배사로 배송이 되나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>CJ대한통운 택배로 기본 배송사로 배송되고 있습니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>30</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            적립금은 쿠폰과 함께 사용 가능한가요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>적립금은 쿠폰과 함께 중복 사용 가능하며, 쿠폰은 주문서당 1개 쿠폰만 사용 가능합니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>29</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            쿠폰은 어떻게 사용하나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>주문/결제 페이지내의 쿠폰 사용 > 쿠폰 선택에서 보유 쿠폰 내역확인 후<br>
                                    사용가능한 쿠폰 선택하여 확인 버튼을 누르면 쿠폰 적용됩니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>28</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            적립금은 어떻게 사용하나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>적립금은 구매금액이 3만원 이상일 때 현금처럼 사용이 가능합니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>27</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            환불 시 적립금과 쿠폰은 어떻게 되나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>사용하신 적립금과 쿠폰은 복원해드립니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>26</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            적립금 상세 내역은 확인할 수 있나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>로그인 후 My Huxley > 나의 적립금에서 상세 내역 확인할 수 있습니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>25</td>
                        <td>쿠폰적립금</td>
                        <td class="tb_left">
                            적립금은 어떻게 적립되나요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>제품 구매 시 적립금은 회원 등급별로 상이하게 적립됩니다.<br>
                                    이외에 이벤트 참여, 리뷰 작성 등에 따라 적립금을 적립해 드립니다.</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="qst_box">
                        <td>24</td>
                        <td>취소교환반품</td>
                        <td class="tb_left">
                            제품 수령 후 반품 시 반품 배송비는 얼마인가요?
                            <div class="ans_box">
                                <span class="ans">답변</span>
                                <span>제품 수령(배송완료) 후 반품을 원하시는 경우 미사용 제품에 한해 7일내에 반품이 가능합니다.<br>
                                    고객변심으로 인한 반품시의 왕복배송비 5천원이 부과되며 고객님이 부담하셔야 합니다.</span>
                            </div>
                        </td>
                    </tr>
            </table>
            <?php if($login_id == "admin"){ ?>
            <p class="">
                <span>TOTAL<?php echo $total; ?></span>
                <span><a href="">글쓰기</a></span>
            </p>
            <?php }; ?>
        
            <!-- <div class="page_btn">
                <button class="btn" type="button">1</button>
                <button class="btn"  type="button">2</button>
                <button class="btn"  type="button">3</button>
                <button class="btn"  type="button">4</button>
            </div> -->
        
            <div class="bottom_btn">
                <select class="btn1" name="select" id="select">
                    <option value="" selected>전체검색</option>
                    <option value="">회원정보</option>
                    <option value="">배송문의</option>
                    <option value="">제품문의</option>
                    <option value="">주문입금결제</option>
                    <option value="">취소교환반품</option>
                    <option value="">쿠폰적립금</option>
                </select>         
                <form class="btn2">
                    <fieldset>
                        <legend class="blind">검색</legend>
                        <input type="text">
                        <button type="button">검색</button>
                    </fieldset>
                </form>
            </div>
        </div>

        <?php
            // paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 - 1) * 페이지 당 보여질 목록 수
            $start = ($page - 1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from notice order by idx desc limit $start, $list_num;";  // 최근 게시물이 가장 최상단이도록 내림차순으로 출력 순서 변경(order by)
            // echo $sql;
            /* exit; */

            // DB에 데이터 전송
            $send = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(게시물 번호 역순)
          //  공식 : 전체데이터 - (현재 페이지 번호-1)*페이지당 보이는 목록 개수
            $i = $total - (($page - 1)* $list_num);
            while($array = mysqli_fetch_array($send)){
        ?>
        <tr class="notice_list_content">
            <td><?php echo $i; ?></td>
            <td class="notice_content_title">
                <a href="notcie.php?n_idx=<?php echo $array["idx"]; ?>">
                <?php echo $array["n_title"]; ?>
                </a>
            </td>
            <td><?php echo $array["writer"]; ?></td>
            <?php $w_date = substr($array["w_date"], 0, 10); ?>
            <td><?php echo $w_date; ?></td>
            <td><?php echo $array["cnt"]; ?></td>
        </tr>
        <?php
                $i--;
            }; 
        ?>
    </table>
    <p class="pager">
    <?php
    // pager : 이전 페이지
    if($page <= 1){
    ?>
    <a href="notice.php?page=1">이전</a>
    <?php } else{ ?>
    <a href="notice.php?page=<?php echo ($page - 1); ?>">이전</a>
    <?php }; ?>

    <?php
    // pager : 페이지 번호 출력
    for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
    ?>
    <a href="notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
    <?php }; ?>

    <?php
    // pager : 다음 페이지
    if($page >= $total_page){
    ?>
    <a href="notcie.php?page=<?php echo $total_page; ?>">다음</a>
    <?php } else{ ?>
    <a href="notice.php?page=<?php echo ($page + 1); ?>">다음</a>
    <?php }; ?>
    </p>
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>