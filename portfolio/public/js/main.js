/*
  ./js/main.js

  ------------------------------------------------------------------------------
 */

 $(document).ready(function() {

    $("#slider").delay(200).fadeIn(800);
    $("#pagination").parent("div").delay(400).animate({opacity:1},700);
    $("#pagine").delay(400).animate({opacity:1},700);
    $('.nav-slide li:first-child').addClass('active');


  // Paramètres
    var duree   = 8000;
    var vitesse = 300;
    var opacite = 0;
    var position = 0;
    var nbreImg  = $('#slider > ul li').length;
    var timer = setInterval(slider, 8000);

  // Fonction du slider
    function slider(){
      position = position - 100;
      if (position <= -100 * nbreImg) {
        position = 0;
      }
      $('#slider > ul').animate({opacity: opacite}, vitesse)
                       .animate({left: position + '%'})
                       .animate({opacity: 1}, 800);
      if ($('.nav-slide li:last-child').hasClass('active')==true) {
        $('.nav-slide li:last-child').removeClass('active').siblings('li:first-child').addClass('active');
      } else {
        $('.nav-slide li.active').not('li:last-child').removeClass('active').next().addClass('active');
      }
    };

    // function progressBar() {
    //   $("#progress > div").width(0).animate({width: 150}, 8000, progressBar);
    // };
    //
    // progressBar();
    //
    // $('.nav-slide li').on("click", function(){
    //   progressBar();
    // });


  // stop le timer et relance le timer : hover sur lien
    $('.nav-slide li').hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(slider, 8000);
    });

    // stop le timer et relance le timer : click sur profil
      $('.profil').click(function(){
          clearInterval(timer);
      });
      // stop le timer et relance le timer : click sur projet
        $('.projet').click(function(){
          timer = setInterval(slider, 8000);
        });

  // changement de slider via les liens
    $('.nav-slide li').click(function(){
      position = $(this).closest('li').index() * (-100);
      $('#slider > ul').animate({opacity: opacite}, vitesse)
                        .animate({left: position + '%'})
                        .animate({opacity: 1}, 800);
      $(this).closest('li').addClass('active').siblings().removeClass('active');
    });

    $('.prev').click(function(){
      clearInterval(timer);
      position = position + 100;
      if (position >= 0) {
        position = -100 * (nbreImg - 1);
      }
      $('#slider > ul').animate({opacity: opacite}, vitesse)
                       .animate({left: position + '%'})
                       .animate({opacity: 1}, 800);
    });
    $('.next').click(function(){
      clearInterval(timer);
      position = position - 100;
      if (position <= -100 * nbreImg) {
        position = 0;
      }
      $('#slider > ul').animate({opacity: opacite}, vitesse)
                       .animate({left: position + '%'})
                       .animate({opacity: 1}, 800);
    })
});
