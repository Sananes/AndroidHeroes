/* Custom jQuery */jQuery(document).ready(function(e){var t=e(".carousel"),n=e(".slide-intro"),r=e(".android-slider");t.find("img:first").parent().addClass("active");t.find(".item:first").addClass("active");t.carousel({interval:4e3});e(".testimonials-carousel").find(".item:last-child").remove();if(n){e(n).css({marginLeft:20,opacity:0});n.animate({opacity:1,marginLeft:0},1e3,function(){})}r.css({marginRight:30,opacity:0});r.animate({opacity:1,marginRight:0},500,function(){});e(".get-in-touch, .back-top").bind("click",function(t){var n=e(this);e("html, body").stop().animate({scrollTop:e(n.attr("href")).offset().top},2500,"easeInOutExpo");t.preventDefault()})});