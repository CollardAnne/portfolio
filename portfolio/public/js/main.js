/*
  ./js/menu-lateral.js

  ------------------------------------------------------------------------------
 */

   $(document).ready(function() {
  		$.localScroll();
  		$("#slide-container").delay(200).fadeIn(800);

      //you can set this, as long as it's not greater than the slides length
        var show = 1;
        var w = $('#slider').width() / show;
        var l = $('.slide').length;
        var timer = setInterval(slider, 8000);

        $('.slide').width(w);
        $('#slide-container').width(w * l)

        function slider() {
            $('.slide:first-child').animate({
                marginLeft: -w
            }, 'slow', function () {
                $(this).appendTo($(this).parent()).css({marginLeft: 0});
            });
        }
        $('#slider').hover(function(){
            clearInterval(timer);
        },function(){
            timer = setInterval(slider, 8000);
        });
	});
