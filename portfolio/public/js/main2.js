/*
  ./js/menu-lateral.js

  ------------------------------------------------------------------------------
 */


   $(document).ready(function() {

  		$.localScroll();
  		$("#slide-container").delay(200).fadeIn(800);

      var show = 1;
      var w = $('#slider').width() / show;
      var l = $('.slide').length;
      var n = 0;
      var timer = setInterval(slider, 8000);

      $('.slide').width(w);
      $('#slide-container').width(w * l);



    // lance la fonction
      function slider() {
        $('.slide:first-child').animate({
            marginLeft: -w
        }, 'slow', function () {
            $(this).appendTo($(this).parent()).css({marginLeft: 0});

        });

      }




    // stop le timer et relance le timer : hover sur slider
      $('#slider').hover(function(){
          clearInterval(timer);
      },function(){
          timer = setInterval(slider, 8000);
      });


    // changement de slider via les liens
      $('.nav-slide a').click(function(){
        n = $(this).closest('li').index();
        for (var i = (n+1); i <= l ; i++) {
          $('#slide' + (i)).hide().animate({
              marginLeft: -w
          }, 'slow', function () {
              $(this).appendTo($(this).parent()).css({marginLeft: 0}).show();
          });

        }
        for (var i = 0; i < n; i++) {
          $('#slide' + (i+1)).fadeOut(500).animate({
              marginLeft: -w
          }, 'slow', function () {
              $(this).appendTo($(this).parent()).css({marginLeft: 0}).show();
          });
          $('#slide' + (n+1)).hide().delay(200).fadeIn(800);
        }
        // stop le timer et relance le timer : clique sur lien
        $(this).on("click", function(){
            clearInterval(timer);
        },function(){
            timer = setInterval(slider, 8000);
        });
      });

	});
