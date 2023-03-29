function loginChk(){
    var u_id = document.getElementById("u_id")
    var pwd = document.getElementById("pwd")

    if(!u_id.value){
        var err = document.getElementById("err_id")
        err.innerHTML = "아이디를 입력하세요."
        u_id.focus();
        return false;
    };

    if(!pwd.value){
        var err = document.getElementById("err_pwd")
        err.innerHTML = "비밀번호를 입력하세요."
        pwd.focus();
        return false;
    };
}

function nonMember(){
    var orderer = document.getElementById("orderer")
    var odr_num = document.getElementById("odr_num")

    if(!orderer.value){
        var err = document.getElementById("err_odr")
        err.innerHTML = "주문자명을 입력하세요.";
        orderer.focus;
        return false;
    }

    if(!odr_num.value){
        var err = document.getElementById("err_num")
        err.innerHTML = "주문번호를 입력하세요.";
        odr_num.focus;
        return false;
    }

    
}