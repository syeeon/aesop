$(document).ready(function(){

    $(function(){
        var $count = $(".count"),
      //  $unitPrice = parseInt($(".unitprice").attr('data-unitprice')),
        $unit = $(".unitprice").text(),
        // a.replace(b,c)

        $unitPrice = parseInt($unit.replace(',','')),
        $currentNumber = parseInt($count.text()),
        $total = $(".total");

        // parseInt(값) 값을 숫자(정수)로 변환
        // console.log($currentNumber);

        $(".cart_txt a").click(function(e){
            e.preventDefault(); //링크 기본 속성 막음
            if($(this).hasClass('plus')){
                // $currentNumber = $currentNumber + 1;
                $currentNumber += 1;
            }else{
                if($currentNumber > 0){
                $currentNumber -= 1;
                }
            }
          //  console.log($currentNumber);
          $count.text($currentNumber);
          var semiTotal = $unitPrice * $currentNumber;
          var total = Number(semiTotal).toLocaleString('en');
          $total.text(total);
        });
    })

});