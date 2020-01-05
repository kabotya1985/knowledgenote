/* scrolling nav */

$(function(){$(document).on("click","a.page-scroll",function(t){var o=$(this);$("html, body").stop().animate({scrollTop:$(o.attr("href")).offset().top},1500,"easeInOutExpo"),t.preventDefault()})});