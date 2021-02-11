$(document).ready(function () {

    $('.openclose').click(function(){
      $('.main-menu ul').slideToggle();
      $('.invest-toggle span').toggleClass('d-none');
  });

  $('.callform a').click(function(){
      $('.formIn').slideToggle();
  });

  $('.main-menu ul li').click(function(){
      $('.invest-toggle span').removeClass('d-none');
  });

  $('.invest-toggle').click(function(){

      $('.header, .mobile-menu').toggleClass('active-invest');
  });

  $('#pollSlider-button').click(function(){
      $('.pollSlider').toggleClass('active');
  });


  var windowsize = $(window).width();
  if(windowsize < 992) {
    $('.main-menu ul li').click(function(){
        $('.main-menu ul').slideUp();
    });
      $('#section1,#section2,#section3,#section4,#section5,#section6 ').addClass('pp-scrollable');
  }

    $('.card-slider').slick({
        autoplay: false,
        speed: 1000,
        autoplaySpeed: 3000,//every item need 3sec
        slidesToShow: 1,
        infinite: true,
    });


    $('#pagepiling').pagepiling({
        menu: '#menu',
        anchors: ['banner', 'Overview', 'Modernliving', 'Gallery', 'Map', 'Login','contact_us'],
        sectionsColor: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff','#fff'],
    });
});

$(document).ready(function () {
    $(".tab-item").click(function () {
        $(".tab-item").removeClass("active");
        $(this).addClass("active");
    });
});

function setgallery(item) {
    alert('asdf');
    $(".tab-pane").removeClass("active");
    $('#' + item).addClass("active");
}


$(function() {
  $("#close").click(function() {
    $('.overlay-ribbon').addClass("slideout");
  });

});


