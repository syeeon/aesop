<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" type="text/css" href="../../../../css/basic.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/sub/join/join.css">
    <script type="text/javascript" src="../../../../js/common/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" src="../../../../js/common/basic.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="../../../../js/sub/join.js"></script>
    <script>
    function idCheck(){
        window.open("id_check.php?u_id=<?php echo $u_id; ?>","","width=600px height=300px")
    }
    </script>
</head>
<body>
<?php include "../../../common/header.php" ?>
    <main id="main" class="main">
        <section class="join_box">
            <section class="content1">
                <h1>REGISTER</h1>
                    <p>Aesop 회원으로 가입하시면 다양한 멤버십 혜택을 누리실 수 있습니다.</p>
            </section>
            <section class="content2">
                <form name="" action="insert.php" method="post" onsubmit="return formCheck()">
                    <fieldset>
                        <legend class="blind">상세정보 입력</legend>
                            <h2 class="title">상세정보 입력</h2>
                                <div class="input_box">
                                    <label for="u_name" class="c_title">이름</label>
                                    <span class="text_wrap">
                                        <input type="text" id="u_name" name="u_name" class="txt_box name">
                                        <span id="err_name" class="err_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="u_id" class="c_title">아이디</label>
                                    <span class="text_wrap">
                                        <input type="text" id="u_id" name="u_id" class="txt_box name">
                                        <button type="button" class="chk_btn" onclick="idCheck()">중복 확인</button>
                                        <span class="exp">아이디는 4~12자만 입력이 가능합니다.</span>
                                        <br><span id="err_id" class="err2_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="pwd" class="c_title">비밀번호</label>
                                    <span class="text_wrap">
                                        <input type="password" id="pwd" name="pwd" class="txt_box">
                                        <span class="exp">비밀번호는 4~16자로 입력해 주세요.</span>
                                        <br><span id="err_pwd" class="err2_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="pwd_chk" class="c_title">비밀번호 확인</label>
                                    <span class="text_wrap">
                                        <input type="password" id="pwd_chk" name="pwd_chk" class="txt_box">
                                        <span id="err_pwd_chk" class="err_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="mobile" class="c_title">연락처</label>
                                    <span class="text_wrap">
                                        <input type="text" id="mobile" name="mobile" class="txt_box">
                                        <span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                        <span id="err_mobile" class="err2_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="address1" class="c_title">우편번호</label>
                                    <input type="text"  id="sample6_postcode" name="sample6_postcode" size="8px" class="short_txt_box">
                                    <button type="button" class="chk_btn" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">우편번호 검색</button>
                                    <span id="err_psCode" class="err_pscode"></span>
                                </div>
                                <div class="input_box"> 
                                    <label for="sample6_address" class="c_title">기본주소</label>
                                    <input type="text" id="sample6_address" name="sample6_address" class="txt_box">
                                </div>
                                <div class="input_box">
                                    <label for="sample6_detailAddress" class="c_title">상세주소</label>
                                    <span class="text_wrap">
                                    <input type="text" id="sample6_detailAddress" name="sample6_detailAddress" class="txt_box">
                                        <span id="err_addr_d" class="err_txt"></span>
                                    </span>
                                </div>
                                <span id="err_addr" class="err_txt"></span>
                                <div class="input_box">
                                    <label for="email_id" class="c_title">이메일</label>
                                    <span class="text_wrap">
                                        <input type="text" id="email_id" name="email_id" size="12" class="txt_box name"> @
                                        <input type="text" id="email_dns" name="email_dns" size="12" class="txt_box name">
                                        <select  id="email_sel" onchange="change_email()" class="txt_box">
                                            <option value="">직접입력</option>
                                            <option value="naver.com" class="box" >네이버</option>
                                            <option value="hanmail.net">다음</option>
                                            <option value="gmail.com">구글</option>
                                        </select>
                                        <span id="err_email" class="err_txt"></span>
                                    </span>
                                </div>
                                <div class="input_box">
                                    <label for="birth" class="c_title">생년월일</label>
                                    <span class="text_wrap">
                                        <input type="text" id="birth" name="birth" class="txt_box" maxlength="8" placeholder="YYYY-MM-DD">
                                        <span class="exp">" - " 없이 숫자만 입력해주세요.</span>
                                        <span id="err_birth" class="err2_txt"></span>
                                    </span>
                                </div>
            </section>
            <section class="content3">
                <h2 class="blind">이용약관 동의</h2>
                <div class="check_all">
                    <label class="check_title title1">
                        <input type="checkbox" id="check_all" class="check_all" name="apply" onclick="selectAll(this)">이용약관 및 개인정보수집 및 이용, 쇼핑정보 수신(선택)에 모두 동의합니다.</label>
                </div>
                <div class="box_wrap">
                    <div class="chk_box">
                        <label class="check_title"><input type="checkbox" id="check_1" class="normal" name="apply">이용 약관에 동의합니다. (필수)</label>
                    </div>
                    <div class="texbox_1">
                        <strong>제1조 정의</strong>
                        <p>본 약관의 주요 용어는 아래와 같이 정의합니다.</p>
                        <p>① “이솝 온라인 몰”은 이솝 코리아가 운영하는 공식 온라인 쇼핑몰을 말합니다.</p>
                        <p>② "서비스"란 이솝 온라인 몰 사이트 및 사이트 관련 각종 서비스를 말합니다.</p><p>이용자"란 사이트에 접속하여 이 약관에 따라 이솝 온라인 몰이 제공하는 서비스를 받는 "회원"과 “비회원”을 말합니다.</p>
                        <p>④ "회원"은 이솝 온라인 몰에 개인 정보를 제공하여 회원 등록을 한 자로서, 회원 전용 서비스를 이용할 수 있는 자를 말합니다.</p>
                        <p>⑤ “비회원”은 회원에 가입하지 않고 이솝 온라인 몰이 제공하는 서비스를 이용하는 자를 말합니다.</p>
                        <p>⑥ 이 약관에서 정하지 아니한 내용과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자 보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.
                        <strong>제2조 개인 정보 보호</strong>
                        회사의 개인정보처리방침에 대한 이해를 돕기 위하여 회사의 개인정보취급방침을 참조하시기 바랍니다. 또한, 이솝 온라인 몰은 고객의 개인정보처리에 대하여 동의를 받고 있습니다.</p>
                        <p>
                        <strong>제 3조 약관의 변경</strong>
                        ① 이솝 온라인 몰은 약관의 내용, 상호, 대표자 성명, 영업소재지 (소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호, 전자우편번호, 사업자 등록번호, 통신판매업 신고번호를 이용자가 확인할 수 있도록, 이솝 온라인 몰 초기 화면에 게시합니다.
                        다만, 약관의 내용은 연결화면을 통하여 볼 수 있도록 할 수 있습니다.</p>
                        <p>② 이솝 온라인 몰은 이용자가 약관에 동의하기에 앞서, 약관에 정해져 있는 내용 중 청약철회, 배송책임, 환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면으로 제공하여 이용자의 확인을 구해야 합니다.</p>
                        <p>③ 이솝 온라인 몰은 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 전자문서 및 전자거래기본법, 전자거래금융법, 전자서명법, 정보통신망 이용촉진 및 정보보호 등에 관한 법률, 방문판매 등에 관한 법률, 소비자보호법 등 관련법을 위배하지 않는 범위에>④ 이솝 온라인 몰이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일 이전부터 적용일자 전일까지 공지합니다. 약관내용의 중대한 변경이 있는 경우, 회사는 이용자에게 이메일 또는 SMS 등을 통하여 개별적으로 통지합니다.</p>
                        <p>⑤ 이솝 온라인 몰이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정 전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 본 조 제4항에 의한 개정약관의 공지기간 내에 이솝 온라인 몰에 송신하여 이솝 온라인 몰의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.</p>
                        <p>⑥ 이 약관에서 정하지 아니한 내용과 이 약관의 해석에 관하여 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자 보호지침 및 관계법령 또는 상관례에 따릅니다.
                        <strong>제4조 이용자에게 제공된 서비스 취소</strong>
                    
                        본 사이트에서 제공되는 제품과 서비스 및 회사가 이용자에게 제공할 수 있는 제품 등의 샘플 일체는 개인 용도에 국한됩니다.  회사와 달리 계약하지 않는 한, 이용자는 회사로부터 구매하거나 달리 수령한 모든 제품, 서비스 또는 동 제품 등의 샘플을 상업적인 용도로 판매 또는 재판매 할 수 없습니다. 회사는 이용자의 재판매 행위가 확인된 경우, 구매 수량과 횟수 및 주기에 근거하여 이용자가 개인 용도로 사용하는 것이라 보기 어려운 경우 등 이용자가 판매 또는 재판매 목적으로 구매한 것이라고 볼 수 있는 합리적인 근거가 있는 경우, 이용자에게 통지한 후 모든 주문 또는 이용자에게 제공된 제품이나 서비스를 취소하거나 그 제품의 수량을 감축할 수 있는 권리를 보유합니다.
                        <strong>제5조 구매 신청
                        </strong>이용자는 이솝 온라인 몰에서 다음 또는 이와 유사한 방법에 의하여 구매를 신청하며, 이솝 온라인 몰은 이용자가 구매신청을 함에 있어서 다음의 각 내용을 알기 쉽게 제공하여야 합니다.</p>
                        <p>① 재화 등의 검색 및 선택</p>
                        <p>② 성명, 주소, 전화번호, 이메일 주소 (또는 휴대전화번호) 등의 입력</p>
                        <p>③ 약관 내용, 청약철회권이 제한되는 서비스, 배송료, 설치비 등의 비용부담과 관련한 내용에 대한 확인</p>
                        <p>④ 이 약관에 동의하고 위 3호의 사항을 확인하거나 거부하는 표시 (예: 마우스 클릭)</p>
                        <p>⑤ 재화 등의 구매신청 및 이에 관한 확인 또는 이솝 온라인 몰의 확인에 대한 동의</p>
                        <p>⑥ 결제방법의 선택
                        <strong>제6조 구매계약의 성립</strong>
                        ① 이솝 온라인 몰은 제5조 구매신청에 대하여 다음 각 호에 해당하면 승낙하지 않을 수 있습니다.</p>
                        <p>1. 신청 내용에 허위, 기재누락, 오기가 있는 경우</p>
                        <p>2. 상행위(재판매)를 목적으로 구매하는 거래이거나, 거래 정황상 상행위(재판매)를 목적으로 한 구매로 합리적으로 판단되는 경우</p>
                        <p>3. 기타 구매신청을 승낙하는 것이 이솝 온라인 몰에 기술적인 문제를 발생시키는 경우</p>
                        <p>② 이솝 온라인 몰의 승낙이 제8조의 수신확인 통지형태로 이용자에게 도달한 시점에 구매계약이 성립한 것으로 봅니다.</p>
                        <p>③ 이솝 온라인 몰의 승낙의 의사표시에는 이용자의 구매신청에 대한 확인 및 판매가능 여부, 구매신청의 정정 취소 등에 관한 정보 등을 포함하여야 합니다.
                        <strong>제7조 지급방법
                        </strong>이솝 온라인 몰에서 구매한 제품에 대한 대금지급은 신용카드 등의 각종 카드 결제로 할 수 있습니다. 단, 이솝 온라인 몰은 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.
                        <strong>제8조 수신확인통지/구매신청 변경 및 취소</strong>
                        이솝 온라인 몰은 이용자의 구매신청이 있는 경우 이용자에게 수신확인 통지를 합니다. 수신확인 통지를 받은 이용자는 의사표시의 불일치 등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있고, 이솝 온라인 몰은 배송 전에 이용자의 요청이 있는 경우에는 지체 없이 그 요청에 따라 처리하여야 합니다. 다만, 이미 대금을 지불한 경우에는 제 11조의 청약철회 등에 관한 규정에 따릅니다.
                        <strong>제9조 재화 등의 공급</strong>
                        ① 이솝 온라인 몰은 이용자와 재화 등의 공급시기에 관하여 별도의 약정이 없는 이상, 이용자가 청약을 한 날로부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다. 다만, 이솝 온라인 몰이 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는 대금의 전부 또는 일부를 받은 날부터 3영업일 이내에 조치를 취합니다. 이때 이솝 온라인 몰은 이용자가 재화 등의 공급 절차 및 진행 사항을 확인할 수 있도록 적절한 조치를 합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 이솝 온라인 몰은 이용자가 구매한 제품에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다.
                        <strong>제10조 환급</strong>
                        이솝 온라인 몰은 이용자가 구매 신청한 재화 등이 품절 등의 사유로 인도 또는 제공을 할 수 없을 때에는 지체 없이 그 사유를 이용자에게 통지하고 사전에 재화 등의 대금을 받은 경우에는 3영업일 이내에 환급하거나 환급에 필요한 조치를 취합니다. 다만, 일시 품절의 경우 구매자가 동의한다면 대금을 환급하지 않고 제품이 입고된 후에 배송할 수 있습니다.
                        <strong>제11조 청약철회</strong>
                        ① 구매자는 ’전자상거래 등에서의 소비자보호에 관한 법률’ 제17조에 의해, 계약 내용에 관한 서면을 받은 날(그 서면을 받은 때보다 재화 등의 공급이 늦게 이루어진 경우에는 재화 등을 공급받거나 재화 등의 공급이 시작된 날을 말합니다)부터 30일 이내에 반품 또는 교환을 요청할 수 있으며, 반품에 관한 일반적인 사항은 ’전자상거래 등에서의 소비자보호에 관한 법률’ 등 관련 법령이 판매자가 제시한 조건보다 우선합니다. 단, 다음 각 호의 경우에는 구매자가 반품 또는 교환을 요청할 수 없습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">1. 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우. 단, 재화 등의 내용 확인을 위하여 박스포장 등을 훼손한 경우는 제외합니다. (예) 뚜껑을 열어 내용물을 확인한 경우 교환이 어려울 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">2. 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">3. 시간의 경과에 의하여 재판매가 곤란할 정도로 재화 등의 가치가 현저히 감소한 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">4. 같은 성능을 지닌 제품 등으로 복제가 가능한 경우 그 원본인 제품 등의 포장 등을 훼손한 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">5. 기타 전자상거래등에서의 소비자보호에 관한 법률에 의하여 소비자의 반품 또는 교환을 제한할 수 있는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 제 1항에도 불구하고 구매자는 재화 등이 내용이 표시 광고 내용과 다르거나 계약 내용이 다르게 이행된 때에는 당해 재화 등을 공급받은 날로부터 3개월 이내, 그 사실을 안 날 또는 알 수 있었던 날로부터 30일이내에 반품 또는 교환을 요청할 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 구매자가 미성년자인 경우, 법정대리인이 그 구매계약에 동의하지 아니하면, 미성년자 본인 또는 법정 대리인이 그 계약을 취소할 수 있습니다.
                        <strong>제12조 청약철회 등의 효과
                        </strong>① 이솝 온라인 몰은 이용자로부터 재화 등을 반환 받은 경우 영업일 3일 이내에 환급하거나 환급에 필요한 조치를 취합니다.</p>
                        <p>② 이솝 온라인 몰은 위 대금을 환급함에 있어서 이용자가 신용카드 등의 결제수단으로 재화 등의 대금을 지급한 때에는 지체 없이 당해 결제수단을 제공한 사업자로 하여금 재화 등의 대금의 청구를 정지 또는 취소하도록 요청합니다.</p>
                        <p>③ 청약철회 등의 경우 공급받은 재화 등의 반환에 필요한 비용은 이용자가 부담합니다. 이솝 온라인 몰은 이용자에게 청약철회 등을 이유로 위약금 또는 손해배상을 청구하지 않습니다. 다만, 재화 등의 내용이 표시/광고 내용과 다르거나 계약 내용과 다르게 이행되어 청약철회 등을 하는 경우 재화 등의 반환에 필요한 비용은 이솝 온라인 몰이 부담합니다.</p>
                        <p>④ 이용자가 재화 등을 제공받을 때 발송비를 부담한 경우에 이솝 온라인 몰은 청약철회 시 그 비용을 누가 부담하는지를 이용자가 알기 쉽도록 명확하게 표시합니다.
                        <strong>제13조 정보의 정확성
                        </strong>회사는 본 사이트에 제품을 게재함에 있어서 가능한 한 정확한 정보를 제공하고자 합니다. 그러나, 관련 법률의 허용범위 내에서, 제품설명, 색상, 정보 또는 본 사이트에서 제공되는 기타 컨텐츠의 정확성, 완전성, 신뢰성, 유효성, 무하자 및 무오류를 보장하지 아니합니다.
                        <strong>제14조 지적 재산</strong>
                        본 사이트에서 이용할 수 있는 모든 정보와 컨텐츠 및 'look and feel'의 요소들 (상표, 로고, 서비스마크, 텍스트, 그래픽, 로고, 버튼 아이콘, 이미지, 오디오 클립, 데이터 편집물, 소프트웨어 및 위 각 요소의 편집물 및 결합물을 포함하며 이에 한정되지 않습니다, 통칭하여 '본 컨텐츠') 은 회사 및 회사의 계열사, 파트너 또는 라이센서의 재산이며, 저작권과 상표권을 규율하는 관계 법률들에 의하여 보호받습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">관련 법률에 의하여 요구되는 경우를 제외하고, 본 컨텐츠 또는 본 사이트의 어떠한 부분도 회사의 명시적인 사전 서면동의 없이는 전체 또는 부문을 막론하고, 영리 목적으로 사용, 재생, 복제, 복사, 판매, 재판매, 접속, 수정 또는 달리 이용될 수 없습니다.
                        <strong>제15조 제한적 이용허락</strong>
                        ① 회사는 이용자가 본 사이트에 접속하여 개인 용도로 본 사이트를 이용할 수 있는 제한적이고 취소가능하며 비독점적인 이용권한을 이용자에게 허용합니다. 이 제한적 이용권한은 다음 각 호의 권리를 포함하지 않습니다. 이용자는 본 사이트상 또는 본 사이트에 첨부되거나 그에 포함되는 모든 권리에 관한 통지를 변경 없이 보유하여야 합니다.</p>
                        <p>1. 본 사이트 또는 본 사이트의 일부를 포함하여 프레이밍(frame) 하거나 프레이밍 기술을 활용할 수 있는 권리</p>
                        <p>2. 본 사이트 또는 본 컨텐츠의 일부 및/또는 전부를 재출판, 재배포, 전송, 판매하거나, 본 사이트 또는 본 컨텐츠의 일부 및/또는 전부에 사용권을 허용하거나, 동 사이트 등을 다운로드할 수 있는 권리(캐싱이나 본 사이트를 조회하기 위하여 필요한 경우를 제외합니다.)</p>
                        <p>3. 개인 용도를 제외한 다른 목적으로 본 사이트나 본 컨텐츠의 일부 및/또는 전부를 사용할 수 있는 권리</p>
                        <p>4. 본 사이트나 본 컨텐츠의 전부 또는 일부에 기반한 파생물을 개작, 역분석, 또는 생성할 수 있는 권리</p>
                        <p>5. 이용자 또는 다른 상대방의 이익을 위하여 계정 정보를 수집할 수 있는 권리</p>
                        <p>6. 메타 태그(meta tags) 또는 본 컨텐츠의 일부 및/또는 전부를 활용한 '숨겨진 텍스트'를 사용할 수 있는 권리</p>
                        <p>7. 소프트웨어 로봇, 스파이더, 크롤러 또는 이와 유사한 데이터 수집 및 추출 도구를 사용할 수 있는 권리나 회사의 기반시설에 불합리한 부담이나 부하를 줄 수 있는 여타 행동을 할 수 있는 권리</p>
                        <p>② 회사는 또한 이용자에게 개인적, 비상업적 용도에 국한하여 본 사이트의 홈페이지에 하이퍼링크를 설정할 수 있는 제한적이고 취소 가능하며 비독점적인 이용권한을 허용합니다. 본 사이트에 링크된 웹사이트는 다음 각 호의 사항을 준수하여야 합니다.</p>
                        <p>1. 회사 본 컨텐츠의 일부 및/또는 전부에 링크될 수는 있지만 본 컨텐츠를 복제할 수 없고,</p>
                        <p>2. 회사가 링크된 사이트나 동 사이트의 제품이나 서비스를 추천하는 것을 의미하지 아니하며,</p>
                        <p>3. 링크된 사이트와 회사와의 관계를 허위로 표시할 수 없고,</p>
                        <p>4. 혐오스럽고, 외설적이며, 불쾌하고, 논쟁적이거나, 불법적이거나, 모든 연령층에게 부적합한 것으로 해석될 수 있는 본 컨텐츠를 포함할 수 없으며,</p>
                        <p>5. 회사나 회사의 제품 또는 서비스를 폄하하거나 허위로 묘사하거나, 또는 불쾌하거나 혐오스러운 방식으로 묘사할 수 없으며, 회사를 바람직하지 않은 제품, 서비스, 의견과 연관시킬 수 없고,</p>
                        <p>6. 홈페이지 첫 화면 이외의 본 사이트 웹 페이지에 링크할 수 없습니다.</p>
                        <p>③ 회사는 재량 하에 이용자가 본 사이트에 연결한 모든 링크를 삭제할 것을 요청할 수 있으며, 이용자는 이와 같은 요청을 받은 즉시 해당 링크를 삭제하고, 링크설정을 재개할 수 있는 별도의 명시적인 서면 승인을 회사로부터 득하지 않는 한 일체의 링크설정 행위를 중단하여야 합니다.</p>
                        <p>④ 이용자가 본 사이트 또는 본 컨텐츠의 일부 및/또는 전부를 승인 받지 않고 상업적 목적으로 사용할 경우, 회사는 이용자에게 사전에 통지한 후, 규정된 제한적 이용권한을 해지할 수 있습니다.  이 경우, 관련 법률이나 본 약관에 규정된 여타 구제책에 영향을 미치지 아니합니다.
                        <strong>제16조 이용자의 의무 및 책임</strong>
                        이용자는 본 사이트에 접속하거나 본 사이트를 이용하는 과정에서 본 약관과 본 사이트에 게재된 접속 및 사용과 관련된 특별한 경고나 지침을 준수하여야 합니다. 이용자는 항시 법률, 관습 및 신의에 따라 행동해야 합니다. 이용자는 본 사이트 또는 본 사이트에 나타날 수 있는 모든 컨텐츠 또는 서비스를 변경할 수 없으며, 어떠한 방식으로도 본 사이트의 완결성이나 본 사이트의 운영을 훼손, 방해할 수 없습니다. 본 약관의 여타 조항의 일반성을 제한하지 않는 범위 내에서 본 약관에 규정된 의무사항을 고의 또는 과실로 이행하지 못할 경우, 이용자는 회사, 파트너, 라이센서에게 발생할 수 있는 모든 손실과 손해에 대한 책임을 부담할 것입니다.
                        이용자는 다음 각 호의 행위를 하여서는 안됩니다.
                        ① 회원 가입을 포함한 각종 신청 또는 변경 시 허위 내용을 등록하는 행위</p>
                        <p>② 타인의 정보 도용</p>
                        <p>③ 이솝 온라인 몰이 게시한 정보의 변경</p>
                        <p>④ 이솝 온라인 몰이 정한 정보 이외의 정보 (컴퓨터 프로그램 등) 등의 송신 또는 게시</p><p>
                    
                        </p>
                        <strong>제17조 이솝 온라인 몰과 피연결 서비스 간의 관계</strong>
                        제 3자가 제공하는 사이트나 컨텐츠가 서비스를 통해 안내되었거나 서비스와 Hyperlink 방식 등으로 연결된 경우, 이러한 사이트나 컨텐츠를 "피연결 서비스"라 합니다. 이솝 온라인 몰은 이용자가 피연결 서비스가 독자적으로 제공하는 사이트나 컨텐츠 및 각종 재화와 용역을 이용하는데 있어, 회사의 고의 또는 중과실이 없는 한, 그 이용과 그로 인해 발생하는 사항에 대한 책임을 지지 않습니다.
                        <strong>제18조 이용자 계정</strong>
                        이용자가 만 14세 이상일 경우, 본 사이트에 등록할 수 있습니다. 이용자가 만 14세 이상이고 실제 본 사이트에 등록할 경우, 이용자의 계정용 이메일 주소, 이용자 ID 및 패스워드를 갖게 됩니다. 이용자는 본인 계정, 이용자ID, 패스워드의 보안을 유지하고, 타인이 이용자의 컴퓨터에 접속하는 것을 제한하여야 할 책임이 있습니다. 이용자는 진술한 정보의 유효성, 완전성, 정확성 및 진실성을 유지하여야 할 책임이 있습니다. 회사의 고의 또는 중과실이 없는 한, 이용자는 이용자의 계정, 이용자ID 및/또는 패스워드 하에 발생하는 모든 행위에 대하여 책임을 지는 것에 동의합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">이용자는 현재 유효하고, 완전하고, 정확하며 진실한 정보만을 제공할 것에 동의합니다. 이용자가 타인을 대신하여 본 사이트에 접속하여 사용할 경우, 이용자는 그가 본인의 자격으로 본 약관에서 규정된 모든 조건에 구속되게 할 권한을 보유하고 있음을 진술하고, 그러한 권한을 부여 받지 못하는 한, 이용자는 본 약관의 적용을 받고 그와 같은 본 사이트에 대한 접속이나 사용으로부터 발생할 수 있는 본 사이트 또는 본 컨텐츠의 오용에 의한 손해에 대하여 책임을 부담함을 승낙합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">본 약관에 위반하는 경우 회사는 사전통지 후, 서비스의 제공을 거부하거나 또는 제공을 거부하고 계정을 해지할 권리를 보유합니다.
                        <strong>제19조 제3자 링크</strong>
                        회사는 회사의 고의 또는 중과실이 없는 한, 본 사이트로부터 또는 본 사이트에 링크된 일체의 오프웹사이트 페이지들(off-website pages) 또는 여타 웹사이트의 컨텐츠에 대해 책임지지 않습니다. 본 사이트에 나타나는 링크는 사용 상의 편의를 위한 것이며, 회사나 파트너가 링크 상의 컨텐츠, 제품, 서비스 또는 공급업체를 추천하는 것은 아닙니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">본 사이트로부터 또는 본 사이트에 링크된 일체의 오프웹사이트 페이지나 여타 웹사이트에 링크를 설정함으로 인한 위험은 이용자가 부담합니다. 회사는 링크된 사이트를 심사 또는 평가할 의무를 부담하지 않고, 본 사이트로부터 또는 본 사이트에 링크된 일체의 오프웹사이트나 여타 웹사이트의 컨텐츠를 보증하지 않으며, 회사의 고의 또는 중과실이 없는 한, 그러한 페이지나 웹사이트의 개인정보취급방침 및 약관을 포함하여 동 페이지 및 웹사이트의 조치, 컨텐츠, 제품 또는 서비스에 대해 아무런 책임이나 의무를 부담하지 않습니다. 이용자는 방문하는 모든 오프 웹사이트 페이지 및 여타 웹사이트의 약관 및 개인정보처리방침을 주의 깊게 검토하여야 합니다.
                        <strong>제20조 특별 게시물, 기능 및 이벤트</strong>
                        본 사이트는 특별 게시물, 기능 또는 이벤트(컨테스트, 경품행사, 기타 이벤트 등)를 제공할 수 있고, 그 게시물 등은 본 약관에 추가되거나 또는 본 약관을 대신하는 이용 조건, 규칙 및/또는 정책의 적용을 받을 수 있으며, 회사나 제3자에 의하여 제공될 수 있습니다. 이 경우, 회사는 이용자에게 그러한 사실을 통지하며, 이용자가 위와 같은 이벤트 등을 이용하고자 할 경우 추가적인 또는 별도의 이용 조건, 규칙 및/또는 정책에 대한 동의를 받습니다.
                        <strong>제21조 저작권의 귀속 및 이용제한</strong>
                        ① 이솝 온라인 몰이 작성한 저작물에 대한 저작권 기타 지적재산권은 이솝 온라인 몰에 귀속합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 이용자는 이솝 온라인 몰을 이용함으로써 얻은 정보 중 이솝 온라인 몰에 지적 재산권이 귀속된 정보를 이솝 온라인 몰의 사전 승낙 없이 복제, 전송, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제 3자에게 이용하게 하여서는 안됩니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 이솝 온라인 몰은 이용자가 올린 컨텐츠의 전체 또는 일부분을 검열할 권리가 있으며, 컨텐츠를 편집, 포스트 거절 또는 삭제할 권한을 가지고 있습니다. 또한 회사가 상품 정보 전달 및 판매 촉진목적으로 이용자 창작 컨텐츠를 공개하거나 컨텐츠를 이솝 온라인 몰 외부로 전송하는 등의 방법으로 제3자에게 컨텐츠를 제공할 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK"> ④ 이솝 온라인 몰은 이용자가 올린 컨텐츠에 포함된 댓글, 정보, 디자인, 아이디어 및 웹사이트에 접속하고 있는 동안 만든 모든 컨텐츠, 이솝에 보낸 의견에 포함되어 있는 정보를 이용할 수 있습니다. 이를 바탕으로 제품 개발, 제조, 마케팅, 웹사이트, 서비스 또는 기타 제품이나 서비스의 창작, 변경 개발 목적으로 사전의 공지, 보상이나 연락 없이 사용할 수 있습니다. 다만, 관련법령상 이용자가 올린 컨텐츠를 수집, 사용, 제공, 처리하기 위하여 이용자의 동의가 필요한 경우 회사는 관련법령에 따라 해당 동의를 받을 것입니다.
                        <strong>제22조 광고게재 등</strong>
                        이솝 온라인 몰은 이용자에게 최상의 서비스를 원활하게 제공하기 위한 재정기반을 마련하기 위하여 상업용 광고를 화면에 게재하거나 이메일 또는 DM(서신), SMS, 전화, 등을 이용하여 광고성 정보 수신에 동의한 개별 이용자에게 보낼 수 있습니다. 단, 회사로 서신, 유선상 수신거절의 의사를 명백히 표시한 이용자에 대해서는 더 이상 이메일 또는 DM(서신), SMS, 전화 등을 하지 않습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">이솝 온라인 몰은 본 서비스를 통한 광고주의 판촉활동에 회원이 직접 참여함으로써 발생하는 손해에 대하여는 아무런 책임을 부담하지 않습니다.
                        <strong>제23조 제안</strong>
                        ① 회사가 요청하지 않은 제안 및 아이디어는 거절하는 것이 회사의 방침입니다. 요청하지 않은 제안 및 아이디어에 대한 회사의 정책에도 불구하고, 질의, 피드백, 제안, 아이디어 또는 이용자가 회사에 제공한 정보 (통칭하여, '제안')는 독점성이나 기밀성이 없는 것으로 취급될 것입니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 회사의 개인정보처리방침의 조건에 따라, 이용자가 제공한 정보를 전송하거나 게시함으로써, 이용자는 동 제안의 전부 또는 일부를 복제하거나, 그로부터 파생물을 생성하거나, 현재 알려져 있거나 앞으로 개발될 모든 형식, 매체, 기술의 형태로 단독으로 또는 기타 작업물의 일부로서 그 제안을 배포하고 전시하거나, 회사의 제품 또는 서비스와 관련하여 또는 그에 포함하여 제안을 사용하는 것을 포함하여 회사가 적절하다고 판단한 어떠한 방식으로 제안을 복제, 사용, 재생, 변경, 개조, 번역, 출판, 사용권 허여, 배포, 판매 또는 양도할 권리를 부여합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 또한 이용자는 이용자의 제안이 반환되지 않으며, 이용자가 제공한 정보 및 동 정보에 포함된 아이디어, 컨셉, 노하우 일체에 대하여 회사가 금전 또는 다른 형태의 대가의 지급 없이, 제품의 개발, 제조, 유통 및 마케팅을 포함하나 그에 국한되지 않는 모든 목적으로 사용할 수 있다는 것을 인정합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">④ 이용자가 제안을 한 경우, 이용자는 자신의 제안에 대해 권리를 소유하거나 달리 관리하고 있다는 점을 진술 및 보증합니다. 이용자는 또한 그러한 제안이 소프트웨어 바이러스, 구매요청, 연쇄메일, 대량메일, 또는 여타 형태의 '스팸'에 해당하거나 소프트웨어 바이러스 등을 포함하지 않는다는 것을 진술 및 보증합니다. 이용자는 허위 이메일 주소를 사용하거나, 허위로 타인인 체하거나, 달리 제안의 출처에 대하여 회사를 기만할 수 없습니다. 이용자는 제안에 관한 권리의 소유권 주장이나 동 정보로부터 발생한 손해와 관련하여, 또는 그로부터 발생하는 모든 청구에 대하여 회사를 면책함에 동의합니다.
                        <strong>제24조 이용자 컨텐츠</strong>
                        ① 이용자가 자료, 텍스트, 소프트웨어, 음악, 음향자료, 사진, 그래픽, 이미지, 비디오, 메시지, 기타 자료 등 ('이용자 컨텐츠')을 본 사이트에서 전송, 업로드, 게시, 이메일 전송 또는 달리 이용가능 하도록 할 경우, 이용자는 그와 같은 이용자 컨텐츠에 대해 전적으로 책임을 부담합니다. 즉, 회사의 고의 또는 중과실이 없는 한, 해당 이용자가 사이트에 게시하는 모든 이용자 컨텐츠에 대하여 회사가 아니라 해당 이용자가 전적으로 책임을 진다는 것을 의미합니다.
                        ② 이용자는 다음 각 호의 사항을 준수합니다.
                         1. 불법적이거나, 해롭거나, 위협적이거나, 폭력적이거나, 또는 타인의 심기를 불편하게 하거나, 명예훼손 적이거나, 천박하거나, 외설적이거나, 비방적이거나, 타인의 사생활을 침해하거나, 혐오스럽거나, 아니면 인종적으로 또는 윤리적으로 반감을 불러일으키는 이용자 컨텐츠를 본 사이트에서 전송, 업로드, 게시, 이메일 전송 또는 달리 공개할 수 없고, 다른 사람들이 이러한 컨텐츠를 본 사이트에서 전송, 업로드, 게시, 이메일 전송 또는 달리 공개하도록 돕거나 조장할 수 없습니다.
                         2. 이용자는 법률이나 계약 또는 신뢰 관계상 전술한 성격의 이용자 컨텐츠를 이용 가능하게 할 권리를 가지지 않는다는 점에 동의합니다.
                         3. 이용자는 회사와 이용자 중 일방의 특허권, 상표권, 영업비밀, 저작권 또는 기타 재산권을 침해하는 이용자 컨텐츠를 본 사이트에서 전송, 업로드, 게시, 이메일 전송 또는 달리 이용 가능하게 할 수 없다는 점에 대하여 동의합니다.
                         4. 이용자는 연쇄메일, 대량메일 또는 여타 형태의 '스팸'을 포함하여 소프트웨어 바이러스, 원치 않는 광고물이나 승인 받지 않은 광고물, 구매요청이나 홍보자료 등을 전송, 업로드, 게시, 이메일 전송 또는 달리 이용 가능하게 할 수 없다는 점에 대하여 동의합니다.
                         5. 이용자는 다른 사람을 허위로 대리하거나, 특정인이나 특정 단체와의 관계를 허위로 또는 부정확하게 진술하지 않습니다.
                         6. 이용자는 제3자를 '스토킹'하거나 또는 달리 괴롭히거나, 모함하거나, 해를 끼치지 않습니다.
                         7. 이용자는 이용자 컨텐츠의 출처를 가장하기 위하여 헤더(header)를 위조하거나 식별표시 등을 달리 조작하지 않습니다.
                         8. 이용자는 고의성의 유무를 불문하고 관련 지역, 국가의 법률 또는 국제법을 위반하지 않습니다.
                         9. 이용자는 다른 이용자에 대하여 개인 식별이 가능한 데이터를 수집하거나 저장하지 아니한다는 점에 대하여 동의합니다.
                        ③ 회사는 이용자가 생성하여 사이트에 전송 또는 게시한 컨텐츠를 보증하거나 제어하지 않습니다. 따라서 회사는 이용자 컨텐츠의 정확성, 진실성 또는 품질을 보장하지 않습니다.
                        ④ 이용자는 본 사이트를 사용함으로써 이용자에게 불쾌하고 음란하며 반감을 일으킬 수 있는 이용자 컨텐츠에 노출될 수 있다는 점을 양지합니다. 어떠한 상황에서도, 회사는 이용자 컨텐츠상 오류나 누락을 포함한 일체의 이용자 컨텐츠에 대해서, 또는 본 사이트를 통하여 전송, 업로드, 게시, 이메일 전송 또는 달리 공개된 이용자 컨텐츠를 사용함으로써 이용자에게 발생한 모든 성격의 손실이나 손해에 대해서, 회사의 고의 또는 중과실이 없는 한, 일체의 책임을 지지 않습니다.
                        ⑤ 이용자는 회사가 회사의 합리적인 재량으로, 사전 통지 후, 이용자 컨텐츠의 게시를 거부하거나 동 컨텐츠를 제거할 수 있는 권리(의무는 아님)를 가짐을 인정합니다. 전술사항이나 본 약관의 여타 조항의 일반성을 제한하지 않고, 회사는 본 약관을 위반하거나 달리 반감을 일으키는 이용자 컨텐츠에 대해서는 이를 제거할 수 있는 권리를 지니며, 본 약관을 위반하거나 타인의 권리를 침해하는 이용자에 대해서는 통지 후 서비스의 제공을 거부하거나 또는 서비스의 제공을 거부하고 이용자의 계정을 해지할 권리를 보유합니다.
                        불복 절차는 아래 고객서비스팀으로 연락주시기 바랍니다: aesop@aesop.com/ Fax: 070-8677-0661/ Tel: 0030-8321-0480
                        <strong>제25조 저작권 관련 불만</strong>
                        회사는 타인의 지적 재산을 존중합니다. 한국의 지적재산관련법에 따라, 저작권보호를 받는 컨텐츠가 지적재산관련법 위반에 해당하는 방식으로 복제되었다고 판단하는 경우, 이용자는 완전하게 작성된 '재생 또는 전송 중단 요청서' 및 요청된 정보와 백업 자료 일체를 회사의 지정대리인에게 이메일 또는 서면에 의하여 통지하여 주십시오.
                        <strong>제26조 진술 및 보증(책임의 제한)</strong>
                        본 사이트는 '현 상태 그대로' 제시됩니다. 회사는 법적으로 배제될 수 없는 범위를 제외하고는 상품적합성, 비침해 또는 특정 목적에 대한 적합성에 대한 보증을 포함하여 (그러나 이에 한정되지 아니합니다) 본 약관이나 본 사이트와 관련하여 어떠한 종류의 명시적 또는 묵시적인 진술이나 보증을 하지 아니합니다.
                        이용자는, 관련 법률이 허용하는 최대 한도까지, (계약, 불법행위(과실 포함) 및 기타 조건상), (1) 사업장애, (2) 접속 지연 또는 본 사이트에의 접속 장애, (3) 데이터 전송 불가, 전송오류, 데이터 훼손, 파괴 또는 기타 변형, (4) 본 사이트에서의 오프웹사이트 링크 또는 그 링크를 처리하는 과정에서 발생한 모든 종류의 손실 또는 손해, (5) 제3자 웹사이트 쪽으로 또는 그로부터 하이퍼링크 연결과정을 포함하여 이용자의 본 사이트 사용과 관련하여 발생할 수 있는 컴퓨터 바이러스, 시스템 오류, 또는 오작동, (6) 컨텐츠상 부정확성이나 누락 또는 (7) 회사의 합리적 관리 범위를 넘어선 사건 일체에 대하여, 회사는 어떠한 상황에서도 책임을 부담하지 아니함에 대하여 동의합니다. 또한 관련 법률이 허용하는 최대 한도까지, 회사는 손해배상의 가능성에 대해서 사전에 알고 있었다고 할지라도, 계약 (일실이익을 포함합니다), 불법행위 (과실을 포함합니다) 또는 기타 행위의 형태를 불문하고, 본 사이트 또는 이용자의 본 사이트 사용과 관련한 모든 종류의 간접적, 특별한, 징벌적, 우발적 또는 후속적인 손해에 대하여 책임을 지지 아니하며, 어떠한 경우에도 회사의 손해배상 총액은 한화 금 구만원(90,000원)을 초과하지 아니합니다.
                        <strong>제27조 면책</strong>
                        이용자는 이용자의 본 사이트 사용이나 본 약관 위반으로부터 기인한 제3자의 청구, 소송 또는 권리주장으로 인한 일체의 손실, 손해, 비용 (합리적 범위의 변호사 수임료를 포함합니다) 에 대하여, 회사의 고의 또는 중과실이 없는 한, 회사를 보호하고 면책함에 동의합니다. 이용자는 또한 이용자의 소프트웨어 로봇, 스파이더, 크롤러 또는 그와 유사한 데이터 수집 및 추출 도구를 사용함으로써 발생하거나, 기타 회사의 기반시설에 불합리한 부담이나 부하를 주는 어떠한 행위를 함으로 인하여 발생하는 일체의 손실, 손해, 비용 (합리적 범위의 변호사 수임료를 포함합니다) 에 대해 회사에게 배상함에 동의합니다.
                        <strong>제28조 분쟁</strong>
                        ① 본 사이트에 관한 일체의 분쟁과 관련하여, 본 약관에 의하여 예상된 이용자의 권리와 의무 및 모든 행위는 대한민국의 법률에 의하여 규율 될 것입니다. 이솝 온라인 몰”과 “이용자”간에 제기된 “서비스” 관련 소송에는 대한민국 법을 적용합니다. 법에 의하여 허용되는 최대 한도 내에서, 회사와 이용자 간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없을 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에 제기합니다. 다만, 이용자가 동의할 경우 선택적으로 중재 신청이 제기될 수 있습니다.
                        ②  이용자는 상기 관할 및 절차에 따르되, 다만 예외적으로 회사는 이용자가 회사의 지적재산권이나 회사 계열사, 파트너, 라이센서의 지적재산권을 위반하였거나 위반할 우려가 있는 경우에는, 관할법원에 금지명령이나 기타 적절한 구제조치를 청구할 수 있습니다.
                        <strong>제29조 분쟁 해결</strong>
                        ① 이솝 온라인 몰은 이용자가 서비스와 관련하여 제기하는 정당한 의견이나 불만을 반영하고 그 피해 및 보상 처리를 고객 서비스팀을 통해 진행합니다.
                        ② 이솝 온라인 몰은 서비스와 관련하여 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리 일정을 즉시 통보해 줍니다.
                        ③ 이솝 온라인 몰과 이용자 간에 발생한 서비스 이용과 관련한 이용자의 피해 구제 신청이 있는 경우에는 공정거래위원회 또는 시/도 지사가 의뢰하는 분쟁 조정 기관의 조정에 따를 수 있습니다.
                        <strong>제30조 이용자에 대한 통지 방법</strong>
                        ① 이솝 온라인 몰이 특정 이용자 또는 회원에 대한 통지를 하는 경우 회원이 이솝 온라인 몰에 미리 약정하여 지정한 전자우편 주소 또는 문자 메시지로 할 수 있습니다. 이용자는 회사로부터 이메일을 통해서나 본 사이트상 공지를 통해서 본 약관이 언급하는 합의, 통지, 공개사항 및 기타 통신 내용(통칭하여, '통지') 수령함에 동의합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 이솝 온라인 몰은 불특정 다수 회원에 대한 통지의 경우 1주일 이상 서비스 사이트 내에 게시함으로써 개별 통지에 갈음할 수 있습니다. 다만, 약관내용의 중대한 변경이 있거나 약관이 이용자에게 불리하게 변경되는 경우 또는 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 회사는 이용자에게 이메일 또는 SMS 등을 통하여 개별적으로 통지합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 이용자는 회사가 이용자에게 전자적으로 제공하는 모든 통지는 그러한 통지가 서면으로 이루어져야 한다는 법적 요건을 충족한다는 점에 대하여 동의합니다. 전자적 통지 수령에 대한 동의를 철회하려면, 고객서비스팀의 아래 이메일을 통해 그와 같은 동의 철회를 회사측에 통지하여야 하고, 본 사이트 이용을 중단하여야 합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">고객서비스팀: <a class="Hyperlink-module_base__3idT0_split Hyperlink-module_left__1NBSb_split Hyperlink-module_dark__NDp6F_split" href="mailto:aesop@aesop.com/" target="_blank">aesop@aesop.com/</a> Fax: 070-8677-0661/ Tel: 0030-8321-0480</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">회사는 전자적 통지 수령에 동의하지 않는 이용자에게 본 사이트의 혜택을 제공할 수 없습니다.
                        <strong>제31조 서비스의 제공 및 변경</strong>
                        ① 이솝 온라인 몰은 이용자에게 아래와 같은 서비스를 제공합니다.
                        1. 제품의 판매
                        2. 다양한 정보의 제공
                        3. 광고, 이벤트 행사 등 제품과 관련한 다양한 판촉 행위 (DM, E-DM 및 SMS 등 포함)
                        4. 기타 이용자에게 유용한 부가 서비스
                        ② 이솝 온라인 몰은 제품 품절 등으로 더 이상 제공할 수 없는 경우에는 장차 체결되는 계약에 의해 제공할 제품의 내용을 변경할 수 있습니다.
                        ③ 이솝 온라인 몰이 제공하기로 계약을 체결한 서비스의 내용을 제품 품절의 사유로 변경할 경우에는 그 사유를 이용자에게 등록된 전화, 이메일 혹은 SMS 등을 통해 알립니다.
                        <strong>제32조 서비스의 중단</strong>
                        ① 이솝 온라인 몰은 컴퓨터 등 전기통신설비의 보수점검 교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 제1항에 의한 서비스 중단의 경우에는 이솝 온라인 몰은 고객이 등록한 통지가능 수단 중 하나를 사용하게 되며 고객의 변경 및 부재로 인한 미확인으로 인해 발생된 문제에 대해서 이솝 온라인 몰은 회사의 고의 또는 중과실이 없는 한 책임지지 않습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 사업종목의 전환, 사업의 포기, 업체 간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 이를 이용자에게 통지하고 이용자가 입은 손해에 대하여 배상합니다.
                        <strong>제33조 회원 가입</strong>
                        ① 이용자는 이솝 온라인 몰이 정한 가입 양식에 따라 회원 정보를 기입한 후, 이용 약관에 동의한다는 의사 표시를 함으로써 회원 가입을 신청합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 이솝 온라인 몰은 전항과 같이 회원으로 가입할 것을 신청한 자가 다음 각 호에 해당하지 않는 한 신청한 자를 회원으로 등록합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">1. 등록 내용에 허위, 기재누락, 오기가 있는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">2. 기타 회원으로 등록하는 것이 이솝 온라인 몰의 기술상 현저히 지장이 있다고 판단되는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 만14세 미만의 아동은 이솝 온라인 몰 회원가입과 전자상거래 등 계약에 관한 서비스가 제한됩니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">④ 회원 가입 계약의 성립시기는 이솝 온라인 몰의 승낙이 가입 신청자에게 도달한 시점으로 합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">⑤ 회원은 이솝 온라인 몰에 등록한 회원정보에 변경이 있는 경우, 즉시 이솝 온라인 몰에서 정하는 방법에 따라 해당 변경사항을 이솝 온라인 몰에게 통지하거나 수정하여야 합니다.
                        <strong>제34조 회원의 탈퇴 및 회원자격 상실</strong>
                        ① 회원은 이솝 온라인 몰에 언제든지 자신의 회원 등록을 말소해 줄 것(회원 탈퇴)을 요청할 수 있으며 이솝 온라인 몰은 위 요청을 받은 해당 이용자의 회원 등록 말소를 위한 절차를 밟습니다. 단, 절차가 진행되는 동안에는 기존 일정에 맞춰 예정된 서비스를 제공받을 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 이용자가 다음 각 호의 사유에 해당하는 경우, 이솝 온라인 몰은 사전 통지 후, 이용자의 회원자격을 상실 시킬 수 있습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">1. 가입 신청 시에 허위 내용을 등록한 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">2. 이솝 온라인 몰을 이용하여 구입한 재화 등의 대금, 기타 서비스 이용에 관련하여 회원이 부담하는 채무를 기일에 지급하지 않는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">3. 다른 사람의 서비스 이용을 방해하거나 그 정보를 도용하는 등 전자 거래 질서를 위협하는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">4. 이솝 온라인 몰을 이용하여 법령과 본 약관이 금지하거나 미풍 양속에 반하는 행위를 하는 경우</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 이솝 온라인 몰이 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고 회원등록 말소 전에 최소한 30일 이상의 기간을 정하여 소명할 기회를 부여합니다.
                        <strong>제35조 일반조항</strong>
                        ① 이용자는 이용자의 본 사이트 사용과 관련하여 본 약관이 회사와 이용자 간의 완전하고 배타적인 합의를 구성하며, 이전의 모든 제안, 계약 또는 기타 의견을 대체하고 규율한다는 점에 대하여 인정하고 동의합니다. 회사는 회사의 재량 하에 본 사이트에 수정 사항을 게시함으로써 언제든지 본 약관을 수정할 권리를 가집니다. 다만, 약관내용의 중대한 변경이 있는 경우, 회사는 이용자에게 이메일 또는 SMS 등을 통하여 개별적으로 통지합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">② 수정사항 공지 또는 통지 이후 이용자의 계속적인 본 사이트 이용은 본 약관의 모든 변경된 사항에 대한 동의를 구성합니다. 회사는, 사전 통지를 통하여 본 약관에 의하여 부여된 권리를 해지할 수 있습니다. 이용자는 본 사이트의 사용을 모두 중단함으로써, 즉시 모든 해지 또는 관련 통지를 준수하여야 합니다. 본 약관에 포함된 어떠한 사항도 회사와 이용자 간에 대리관계, 파트너쉽, 또는 기타 형태의 합작기업을 형성하는 것으로 해석될 수 없습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 본 약관의 어떠한 조항이 관련 법률상 이행 불가능하거나 유효하지 않을 경우, 또는 중재판정이나 법원의 판결을 통해 이행 불가능하거나 유효하지 않은 것으로 결정될 경우, 그와 같은 이행 불가능성이나 무효성은 본 약관 전체의 이행가능성이나 유효성을 박탈할 수 없으나, 본 약관은 재판당국에 의하여 가능한 범위 내에서 원 조항에 반영된 바와 같이 당사자들의 원래 의도를 최대한 반영하기 위하여 수정될 수 있습니다. 본 약관과 관련하여 의문사항이 있을 경우, 회사로 유선으로 연락 바랍니다.
                        <strong>제36조 (기타 조항)</strong>
                        ① 회사는 필요한 경우 특정 서비스나 기능의 전부 또는 일부를 이솝 온라인 몰을 통해 일시적 또는 영구적으로 수정하거나 중단할 수 있습니다.</p>
                        <p>② 각 당사자는 상대방의 서면동의 없이 이 약관상의 권리와 의무를 제3자에게 양도하거나 처분할 수 없습니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">③ 이 약관과 관련하여 당사자간의 합의에 의하여 추가로 작성된 계약서, 협정서, 통보서 등과 회사의 정책변경, 법령의 제/개정 또는 공공기관의 고시나 지침 등에 의하여 회사가 이솝 온라인 몰을 통해 공지하는 내용도 이용계약의 일부를 구성합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">④ 회사는 구매자 회원이 서비스 이용 시 발생 할 수 있는 정당한 의견이나 불만 사항의 적극적 수렴, 그의 해결, 회원 상호간에 분쟁 조정을 위하여 “고객서비스팀”를 설치하고 운영합니다. 회사는 회원이 제기하는 각종 불만사항 및 의견에 대하여 적극적으로 검토 후 정당하다고 판단되는 경우 이를 신속하게 처리하며, 즉시 처리가 곤란한 사항에 대하여서는 그 사유와 처리기간에 대하여 e-mail 혹은 전화를 통하여 회원에게 통보를 합니다.</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">고객서비스팀: aesop@aesop.com/ Fax: 070-8677-0661/ Tel: 0030-8321-0480</p><p class="Paragraph-module_base__T7AIv_split Paragraph-module_dark__1kMJX_split rich-text-to-react-module_paragraph__TMu7V registration-form-checkbox-component-module_scrollableContent-text__fPcwK">
                        이용약관의 변경</p>
                        <p>본 이용약관은 2022년 6월 30일부터 효력을 가집니다. 약관이 업데이트가 되는 경우 고객님께 고지를 하며, 최신 또는 이전 이용약관은 아래와 같이 확인이 가능합니다.</p>
                        <p><a href="https://www.aesop.com/kr/r/terms-kr-6-30/" target="_blank"><span style="text-decoration: underline;">이용약관 (2022.6.30.이전)</span></a></p>
                    </div>
                    <p id="err_check1" class="err_apply"></p>
                </div>
                <div class="box_wrap">
                    <div class="chk_box">
                        <label class="check_title"><input class="normal" type="checkbox" id="check_2" name="apply">개인정보 수집 및 이용조건에 동의합니다. (필수)</label>
                    </div>
                    <div class="texbox_2">
                        <p>개인정보수집항목</span></p>
                        <p>a) 성명, 이메일 주소, 전화번호, 주소, 기타 귀하가 당사 웹사이트에서 구매 시 알려주신 개인정보; </p>
                        <p>c) 구매 내역, 서비스 이용 기록 및 웹사이트 활동 내역 (예: 홈페이지에서 최근 본 내용 추적), 고객 클레임 및 분쟁 해결에 관한 정보.
                    <span style="text-decoration: underline;">
                        이용목적</span></p>
                        <p>
                            a) 회원제 서비스 제공에 따른 본인 확인 및 개인식별, 가입의사 확인 및 부정가입 방지, 회원가입 여부 및 미성년자 확인 여부 확인, 불량회원의 부정이용 방지와 비인가 사용 방지
                            b) 회원 관리, 제품, 서비스, 정보의 개발, 마케팅, 판매 또는 그 밖의 서비스 제공
                            c) 이솝의 제품, 서비스 구매 주문 처리, 배송 등 고객 및 이솝간 기타 계약을 이행하고 집행
                            d) 법적 의무를 준수하고 이솝과 고객과의 분쟁을 해결, 각종 고지사항의 전달 및 연락, 문의 및 민원사항의 상담 및 처리
                            e) 고객의 이솝 계정 유지관리, 업데이트 및 서비스 제공
                            f) 이솝의 시스템 유지관리, 운영 및 개선
                            g) 고객의 사용편의, 사용내역, 선호도 등에 맞추고 문제 해결을 위하여 홈페이지, 제품 및 서비스 개선
                            h) 이솝 내부 운영 활동, 연구, 분석, 기획, 프로젝트 개발 등 수행
                            <span style="text-decoration: underline;">
                            보유기간:
                            서비스 이용계약 또는 회원가입 해지시까지. 해지문의는 고객서비스팀에 문의바랍니다 (Email: Aesop@aesop.com/ Fax: 070-8677-0661/ Tel: 0030-8321-0480). 다만 채권․채무관계 잔존시에는 해당 채권․채무관계 정산시까지.  관련 법률 및 규정에 따른 보유: 상법, 전자상거래 등에서의 소비자 보호에 관한 법률, 및 그 밖의 관련 법령에서 요구하는 경우, 이솝은 그러한 법령에 명시된 기간 동안 고객의 개인정보를 보유합니다. 그러한 경우, 이솝은 고객의 개인정보를 그러한 정보의 보유 목적으로만 사용합니다. 보유 기간은 아래와 같습니다.
                            - 계약 또는 청약 철회 등에 관한 기록
                            목적: 전자상거래 등에서의 소비자 보호에 관한 법률
                            기간: 5년
                            - 대금 결제 및 상품 등의 공급에 관한 기록
                            목적: 전자상거래 등에서의 소비자 보호에 관한 법률
                            기간: 5년
                            - 전자금융 거래 기록
                            목적: 전자금융거래법
                            기간: 5년
                            - 소비자 분쟁 및 처리에 관한 기록
                            목적: 전자상거래 등에서의 소비자 보호에 관한 법률
                            기간: 3년
                            - 웹사이트 방문기록
                            목적: 통신비밀보호법
                            기간: 3개월
                            </span>고객님께서는 개인정보 수집 및 이용 조건에 동의하지 않으셔도 됩니다만, 그러한 경우, 회원가입과 멤버쉽 서비스 제공이 어려운 점 양해바랍니다. </p>
                        </div>
                        <p id="err_check2" class="err_apply"></p>
                </div>
                <div class="box_wrap">
                    <div class="chk_box">
                        <label class="check_title"><input class="normal" type="checkbox" id="check_3" name="apply">마케팅 정보 수신에 동의합니다. (선택)</label>
                    </div>
                    <div class="texbox_3">
                        <p>마케팅 정보 수신 동의 (선택)</p>
                        <p>이솝은 고객님의 개인정보를 사용하여 <span style="text-decoration: underline;">이솝의 제품, 서비스 및 홍보 행사 관련 정보를 마케팅 목적으로</span>, <span style="text-decoration: underline;">고객님이 동의 해지하시기 전까지</span>, 고객님께 보내 드립니다.<br>
                            개인정보 수집 및 이용 그리고 마케팅 정보 수령에 동의하지 않으셔도 됩니다. 그러한 경우, 고객님께서는 마케팅 정보를 수령하실 수 없습니다.</p>
                    </div>
                </div>

                <div class="button_wrop">
                    <button class="accept" type="submit">확인</button>
                    <button class="cancel" type="reset">취소</button>
                </div>
                    </fieldset>
                </form>
        </section>                    
    </main>
    <?php include "../../../common/footer.php" ?>
</body>
</html>