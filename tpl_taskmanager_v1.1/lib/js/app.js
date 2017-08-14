$(function(){
  $('#js-trigger').click(function(){
    // $('.c-sub-trigger-arrow').toggleClass('is-deactive');
    $('.c-sub-trigger').toggleClass('is-deactive');
    $('.c-sub-trigger-line').toggleClass('is-deactive');
    $('.c-trigger-line').toggleClass('is-active');
    $('.l-main').toggleClass('is-active');
    $('.c-nav').toggleClass('is-active');
    $('.l-sub').toggleClass('is-deactive');
  });
});