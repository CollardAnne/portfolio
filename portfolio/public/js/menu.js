/*
  ./js/menu-hamburger.js

  ------------------------------------------------------------------------------
 */

  $(function() {

    $(".menu-cover").hide();

    $(".menu-hamburger").click(function() {

    	$(this).toggleClass("active");
      $(".menu-cover").slideToggle(500);
      $(".menu-cover div").hide().delay(400).fadeToggle(600);

    });

    $(".menu-toggle").click(function() {

    	$(".menu-toggle div").toggleClass("active");
      $(".menu-cover").slideToggle(500);
      $(".menu-cover div").hide().delay(400).fadeToggle(600);

    });

	});
