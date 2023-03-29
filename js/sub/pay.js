function formCheck(){
    var u_name = document.getElementById("u_name");
    var u_id = document.getElementById("u_id");
    var pwd = document.getElementById("pwd")
    var pwd_chk = document.getElementById("pwd_chk")
    var mobile = document.getElementById("mobile")
    
    if(!u_name.value){
        var err = document.getElementById("err_name");
        err.innerHTML = "\* 이름을 입력하세요"
        u_name.focus();
        return false;
    }

    var nameRule = /^[가-힣a-zA-Z]+$/;
    if(!nameRule.test(u_name.value)){
        var err = document.getElementById('err_name');
        err.innerHTML = "\* 이름은 한글 or 영문만 입력이 가능합니다"
        u_name.focus();
        return false;
    }


    if(!mobile.value){
        var err = document.getElementById("err_mobile");
        err.innerHTML = "\* 연락처를 입력하세요"
        mobile.focus();
        return false;
    }


    var mobileRule =  /^[0-9]+$/g;
    if(!mobileRule.test(mobile.value)){
        var err = document.getElementById("err_mobile");
        err.innerHTML = "\* 숫자만 입력 가능합니다.";
        mobile.focus();
        return false;
    }

    var email = document.getElementById("email_id")
    var email_dns = document.getElementById("email_dns")
    if(email.value===""){
        var err = document.getElementById("err_email")
        err.innerHTML = "\* 이메일을 입력하세요"
        email.focus();
        return false
    } if(email_dns.value===""){
        var err = document.getElementById("err_email")
        err.innerHTML = "\* 도메인 주소를 입력하세요"
        email_dns.focus();
        return false
    };


};

        function sample6_execDaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var addr = ''; // 주소 변수
            var extraAddr = ''; // 참고항목 변수

            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                addr = data.roadAddress;
            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                addr = data.jibunAddress;
            }

            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
            if(data.userSelectedType === 'R'){
                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraAddr !== ''){
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                document.getElementById("sample6_extraAddress").value = extraAddr;
            
            } else {
                document.getElementById("sample6_extraAddress").value = '';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('sample6_postcode').value = data.zonecode;
            document.getElementById("sample6_address").value = addr;
            // 커서를 상세주소 필드로 이동한다.
            document.getElementById("sample6_detailAddress").focus();
        }
    }).open();
}


function change_email(){
    var email_dns = document.getElementById("email_dns")
    var email_sel = document.getElementById("email_sel")

    var idx = email_sel.options.selectedIndex;
    var val = email_sel.options[idx].value;
    email_dns.value = val
};


function address_check(){
    window.open("address_check.html","","width=600px height=300px")
}       

function payEnd(){
    alert("결제가 완료되었습니다 :)")
    location.href='../../index.php'
}




$(document).ready(function(){
    $(".bill_wrap").hide();
    $(".pay_name_wrap").hide();
    $(".cash_bill_wrap").hide();

    $("input[class='card_pay']").change(function(){
                $(".pay_name_wrap").hide();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").hide();
        });

    $("input[class='phone_pay']").change(function(){
                $(".pay_name_wrap").hide();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").hide();
        });

    $("input[class='kko_pay']").change(function(){
                $(".pay_name_wrap").hide();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").hide();
        });

    $("input[class='toss']").change(function(){
                $(".pay_name_wrap").hide();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").hide();
        });

    $("input[class='imagine']").change(function(){
                $(".pay_name_wrap").hide();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").show();
        });

    $("input[class='send']").change(function(){
                $(".pay_name_wrap").show();
                $(".cash_bill_wrap").hide();
                $(".bill_wrap").show();
        });
        $("input[class='bill_chk']").change(function(){
                    $(".cash_bill_wrap").show();
            });



        $(".checkTo").click(function(){

            if(($(".checkTo")).is(":checked")){
                $(".name_val").val($(".u_name").val())
                $(".mobile_val").val($(".mobile").val())
            }
        })
        

})


