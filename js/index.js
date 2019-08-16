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

// our-businessにscroll
 $('.scroll-business').click(function(){
   $('.menu-icon').slideUp();
   $('.mask').fadeOut();
   var id = $(this).attr('href');
   var position = $(id).offset().top;
   $('html, body').animate({
     'scrollTop':position
    },500)
  });

// greetingにscroll
$('.scroll-greeting').click(function(){
  $('.menu-icon').slideUp();
  $('.mask').fadeOut();
  var id = $(this).attr('href');
  var position = $(id).offset().top;
  $('html, body').animate({
    'scrollTop':position
   },500)
 });

 // campanyにscroll
 $('.scroll-campany').click(function(){
   $('.menu-icon').slideUp();
   $('.mask').fadeOut();
   var id = $(this).attr('href');
   var position = $(id).offset().top;
   $('html, body').animate({
     'scrollTop':position
    },500)
  });

  // contactにscroll
  $('.scroll-contact').click(function(){
    $('.menu-icon').slideUp();
    $('.mask').fadeOut();
    var id = $(this).attr('href');
    var position = $(id).offset().top;
    $('html, body').animate({
      'scrollTop':position
     },500)
   });

 // topにscroll
  $('.back-to-top').click(function(){
    $('html, body').animate({
     'scrollTop':0
    },500)
  });

});
