$(document).ready(function(){

  $('.main_ban').slick({
      autoplay : true,
      dots: false,
      autoplaySpeed : 3000,
      arrows: true,
      // prevArrow : "<button type='button' class='prev'>승연 Previous</button>",
      prevArrow : $('.slick-prev'),
      nextArrow : $('.slick-next'),
      
    })

  /* best seller */
  var $slider1 = $('.cont_box');
  var $progressBar1 = $('.progress1');
  var $progressBarLabel1 = $( '.slider__label1' );

  $slider1.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
  var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
      
    $progressBar1
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel1.text( calc + '% completed' );
  });
  $('.cont_box').slick({
      autoplay :true,
      autoplaySpeed : 1000,
      slidesToShow: 3,     //한번에 보여줄 사진의 갯수(int)
      slidesToScroll: 1, 
      arrows:true,
      prevArrow : $('.content_2-prev'),
      nextArrow : $('.content_2-next'),
      
  });

/* store location */
var $slider = $('.store_wrap');
var $progressBar = $('.progress');
var $progressBarLabel = $( '.slider__label' );

$slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
  var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
  
  $progressBar
    .css('background-size', calc + '% 100%')
    .attr('aria-valuenow', calc );
  
  $progressBarLabel.text( calc + '% completed' );
});

$slider.slick({
  autoplay : true,
  autoplaySpeed : 3000,
  slidesToShow: 1,
  slidesToScroll: 1,
  speed: 100,
  arrows:true,
  prevArrow : $('.content_3-prev'),
  nextArrow : $('.content_3-next'),
}); 

})
