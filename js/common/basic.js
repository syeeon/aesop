
$(document).ready(function () {

  /* gnb */
  $(".gnb .menu").mouseenter(function () {
    $(".gnb ul .dep_1, .gnb ul .dep_2, .nav_bg").stop().slideDown("fast")
  })

  $(".gnb menu, .nav_bg").mouseleave(function () {
    $(".gnb ul .dep_1, .gnb ul .dep_2, .nav_bg").stop().slideUp("fast")
  })

})