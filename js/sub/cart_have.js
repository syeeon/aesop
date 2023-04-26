$(document).ready(function(){

    $(function(){
        let $count = $(".count"),
        $unit = $(".unitprice").text(),

        $unitPrice = parseInt($unit.replace(',','')),
        $currentNumber = parseInt($count.text()),
        $total = $(".total");

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
          let semiTotal = $unitPrice * $currentNumber;
          let total = Number(semiTotal).toLocaleString('en');
          $total.text(total);
        });
    });
});