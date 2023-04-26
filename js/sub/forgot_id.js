function formCheck(){
    let u_name = document.getElementById("u_name");
    let u_email = document.getElementById("u_email");

    if(!u_name.value){
        let err = document.getElementById("err_name");
        err.innerHTML = "이름을 입력하세요."
        u_name.focus();
        return false;
    };

    var nameRule = /^[가-힣a-zA-Z]+$/;
        if(!nameRule.test(u_name.value)){
            let err = document.getElementById('err_name');
            err.innerHTML = "\* 이름은 한글 or 영문만 입력이 가능합니다"
            u_name.focus();
            return false;
        }

    if(!u_email.value){
        let err = document.getElementById("err_email");
        err.innerHTML = "이메일을 입력하세요."
        u_email.focus();
        return false;
    };

    window.open("id_result.php","");
}
