function editCheck(){
    let pwd = document.getElementById("pwd")
    let pwd_chk = document.getElementById("pwd_chk")
    let mobile = document.getElementById("mobile")
    let addr_b = document.getElementById("sample6_address")
    let addr_d = document.getElementById("sample6_detailAddress")


    if(!pwd.value){
        let err = document.getElementById("err_pwd");
        err.innerHTML = "\* 비밀번호를 입력하세요"
        pwd.focus();
        return false;
    }

    let regExp = /^.*(?=^.{4,16}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;
    if(!regExp.test(pwd.value)){
        // console.log('xxx');
        let err = document.getElementById('err_pwd');
        err.innerHTML = "\*  소문자 + 숫자 + -,/ 허용 4~12자만 입력이 가능합니다"
        pwd.focus();
        return false;
    }


    if(!pwd_chk.value){
        let err = document.getElementById("err_pwd_chk");
        err.innerHTML = "\* 비밀번호를 입력하세요"
        pwd_chk.focus();
        return false;
    }

    if(pwd.value != pwd_chk.value){
        let err = document.getElementById("err_pwd_chk");
        err.innerHTML = "\* 비밀번호가 일치하지 않습니다."
        pwd_chk.focus();
        return false;
    }


    if(!mobile.value){
        let err = document.getElementById("err_mobile");
        err.innerHTML = "\* 연락처를 입력하세요"
        mobile.focus();
        return false;
    }


    let mobileRule =  /^[0-9]+$/g;
    if(!mobileRule.test(mobile.value)){
        let err = document.getElementById("err_mobile");
        err.innerHTML = "\* 숫자만 입력 가능합니다.";
        mobile.focus();
        return false;
    }

    if(!addr_b.value){
        let err = document.getElementById("err_addr_b");
        err.innerHTML = "\* 우편번호를 검색하세요"
        return false;
        };
    
        if(!addr_d.value){
        let err = document.getElementById("err_addr_d");
        err.innerHTML = "\* 상세주소를 입력하세요"
        addr_d.focus();
        return false;
        };

    let email = document.getElementById("email_id");
        let email_dns = document.getElementById("email_dns");
        if(email.value===""){
            let err = document.getElementById("err_email");
            err.innerHTML = "\* 이메일을 입력하세요"
            email.focus();
            return false;
        } if(email_dns.value===""){
            let err = document.getElementById("err_email");
            err.innerHTML = "\* 도메인 주소를 입력하세요"
            email_dns.focus();
            return false;
        };


}

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
                //     document.getElementById("sample6_extraAddress").value = extraAddr;
                
                // } else {
                    //     document.getElementById("sample6_extraAddress").value = '';
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
        let email_dns = document.getElementById("email_dns");
        let email_sel = document.getElementById("email_sel");
        
        let idx = email_sel.options.selectedIndex;
        let val = email_sel.options[idx].value;
        email_dns.value = val
    };
    
    // 정보 수정

    function member_del(){
        let del_btn = confirm("정말 탈퇴하시겠습니까?");
        if(del_btn == true){
            location.href='member_del.php';
        };
    };