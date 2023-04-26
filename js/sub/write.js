function formCheck(){

    let u_pwd = document.getElementById("u_pwd");
    let u_content = document.getElementById("u_content");

    if(!u_pwd.value){
        let err = document.getElementById("err_pwd");
        err.innerHTML = "\* 비밀번호를 입력하세요."
        u_pwd.focus();
        return false;
    }

    if(!u_title.value){
        let err = document.getElementById("err_title");
        err.innerHTML = "\* 제목을 입력하세요."
        u_title.focus();
        return false;
    }

    if(!u_content.value){
        let err = document.getElementById("err_content");
        err.innerHTML = "*\ 내용을 입력하세요."
        u_content.focus();
        return false;
    }

    let contentRule = /^.*(?=^.{8,15}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;
    if(!contentRule.test(content.value)){
        let err = document.getElementById("err_content")
        err.innerHTML = "\* 한글 10자, 영문+숫자는 20자 이상 입력하셔야 합니다."
        content.focus();
        return false;
    }
}

$(function(){
    $("#file_fir").on('change',function(){
        var fileName = $("#file_fir").val();
        $(".upload_name1").val(fileName);
    })
    $("#file_sec").on('change',function(){
        var fileName = $("#file_fir").val();
        $(".upload_name2").val(fileName);
    })
    $("#file_thi").on('change',function(){
        var fileName = $("#file_fir").val();
        $(".upload_name3").val(fileName);
    })
})
