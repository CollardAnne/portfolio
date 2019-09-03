/*
  ./js/menu-hamburger.js

  ------------------------------------------------------------------------------
 */

  $(function() {

    $(".menu-cover").hide();

    $(".menu-hamburger").click(function() {

    	$(this).toggleClass("active");
      $(".menu-cover").slideToggle(500);
      $(".menu-cover li").hide().delay(400).fadeToggle(600);

    });

	});
