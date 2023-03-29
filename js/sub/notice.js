$(document).ready(function(){
    $(".qst_box").click(function(){
        $(".ans_box").not($(this).find(".ans_box")).slideUp();
        $(this).find(".ans_box").slideToggle()
    });

});

function noticeForm(){
    var ask = document.getElementById("ask");
    var answer = document.getElementById("answer");

    if(!ask.value){
        alert("ask를 입력하세요.");
        ask.focus();
        return false;
    };

    if(!answer.value){
        alert("answer을 입력하세요.");
        answer.focus();
        return false;
    };
}