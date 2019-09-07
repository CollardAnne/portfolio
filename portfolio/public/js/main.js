/*
  ./js/menu-lateral.js

  ------------------------------------------------------------------------------
 */

   $(document).ready(function() {
  		$.localScroll();
  		// $(".cache").delay(1000).fadeOut(500);
  	//	$("#wrapper-header").delay(500).animate({opacity:'1'},500);
  		// $("#wrapper-footer").delay(1200).animate({opacity:'1'},500);
      $("#imgProjet").delay(500).animate({opacity:'1'},500);
      $("#detailProjet").delay(1000).animate({opacity:'1', left:'0'},1000);
      //$("#mesProjets").delay(1000).animate({opacity:'1'},1000);
	});


  document.addEventListener('DOMContentLoaded',function(event){
    var dataText = ["Bonjour"];
    function bonjour(text, i, fnCallback) {
      if (i < (text.length)) {
       document.querySelector(".bonjour").innerHTML = text.substring(0, i+1) ;
        setTimeout(function() {
          bonjour(text, i + 1, fnCallback)
        }, 100);
      }
      else if (typeof fnCallback == 'function') {
        setTimeout(fnCallback, 1200);
      }
    }
     function TextAnimation(i) {
       // if (typeof dataText[i] == 'undefined'){
       //    setTimeout(function() {
       //      TextAnimation(0);
       //    }, 1200);
       // }
      if (i < dataText[i].length) {
       bonjour(dataText[i], 0, function(){
         TextAnimation(i + 1);
       });
      }
    }
    TextAnimation(0);
  });
