$(document).ready(function(){
   
    $('.cart_btn').click(function(){
        $('.popup_wr').show();
    })

    $('.close').click(function(){
        $('.popup_wr').hide();
    })
})


function cartHave(){
    window.open("../../sub/product/cart/cart_have.php", '', '');
    window.close();
};
    
function goShop(){
    window.close();
};
    