$(function(){

  $('.open-menu').click(function(){
   $('.menu-icon').slideDown();
   $('.mask').fadeIn();
 });

 $('.close').click(function(e){
   e.preventDefault();
   $('.menu-icon').slideUp();
   $('.mask').fadeOut();
 });

 // voiceアコーディオン
 $('.comment').click(function(e) {
   e.preventDefault();
   var $answer = $(this).find('.reply');
   if($answer.hasClass('open')) {
     $answer.removeClass('open');
     $answer.slideUp();
     $(this).find('.accordion-arrow').html('<i class="fas fa-chevron-circle-down"></i>');

   } else {
     $answer.addClass('open');
      $answer.slideDown();
     $(this).find('.accordion-arrow').html('<i class="fas fa-chevron-circle-right"></i>');
   }
 });

 // topにscroll
  $('.back-to-top').click(function(){
    $('html, body').animate({
     'scrollTop':0
    },500)
  });

});
