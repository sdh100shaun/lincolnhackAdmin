!function(e){var o={};function t(a){if(o[a])return o[a].exports;var n=o[a]={i:a,l:!1,exports:{}};return e[a].call(n.exports,n,n.exports,t),n.l=!0,n.exports}t.m=e,t.c=o,t.d=function(e,o,a){t.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:a})},t.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(o,"a",o),o},t.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},t.p="/",t(t.s=128)}({128:function(e,o,t){e.exports=t(129)},129:function(e,o){$(function(){var e,o;e=$(".main-nav"),o=$("html, body"),$(".navbar-header button").click(function(){$(e).hasClass("showing")?$(e).removeClass("showing"):$(e).addClass("showing")}),$(".main-nav button.close").click(function(){$(e).removeClass("showing")}),$("[data-nav-ref]").click(function(t){t.preventDefault(),$(e).removeClass("showing");var a=$(this).attr("href");a.length>0&&o.stop().animate({scrollTop:$(a)[0].offsetTop},500,"swing",function(){})}),function(){var e=[],o=($(".navbar-header .nav-current-section"),$(".main-sidebar ul > li"),$("[section-name]"));for(var t in o)if(!isNaN(t)&&o.hasOwnProperty(t)){var a=o[t],n={};n.name=$(a).attr("section-name"),n.topPos=$(a).offset().top,n.botPos=$(a).offset().top+$(a).outerHeight(!0),n.height=$(a).outerHeight(!0),e.push(n)}}(),$(".faqs a").on("mouseenter",function(){"-250px"==$(".eyes").css("top")&&$(".eyes").animate({top:"-258px",left:"19px"},"slow")}),$(".faqs a").on("mouseleave",function(){$(".eyes").animate({top:"-250px",left:"initial"},"slow")}),$(document).on("click",".faqs a",function(){var e;switch($(this).attr("data-question-ref")){case"1":e="On site parking is available. Where possible, please car share. Pay and Display parking is available within a 20 minute walk.";break;case"2":e="You’ll find out on the day :D";break;case"3":e="Ticket releases will be announced here and on @techlincs";break;case"4":e="Yes. You can team up with friends or other hackers on the day, or you can hack solo. Only one prize per team member per challenge and each challenge has a maximum of four prizes. A maximum of 4 members per team (you can have more than 4 but there are only 4 prize)";break;case"5":e="Anything created remains the property of the hacker (author). LincolnHack and its sponsors have no ownership over anything you create.";break;case"6":e="No… indeed, we strongly advise you get some sleep and stay hydrated. You’re allowed to go home. Come and go as you please. Rember to take regular breaks. Rest is important.";break;case"7":e="You will need to provide a ticket for entry. No ticket, no entry.";break;case"8":e="TBA - all catering is provided by Sam Owen of Salted Orange. The same great chef from last year.";break;default:console.log("Error")}$(".speech-bubble p").animate({opacity:0},function(){$(this).text(e).animate({opacity:1})}),$(".eyes").css("top","-246px"),$(".nose").css("top","-253px"),$("footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose").css("transform","rotate(2deg)"),setTimeout(function(){setTimeout(function(){$(".mouth-open").hide(),$(".mouth-oo").show()},200),$("footer .imp, footer .eyes, footer .mouth-open, footer .mouth-oo, footer .laptop-glow, footer .nose").css("transform","rotate(0deg)")},300),$(".laptop-glow").show(),setTimeout(function(){$(".eyes").css("top","-250px"),setTimeout(function(){$(".nose").css("top","-250px")},200),setTimeout(function(){$(".mouth-open").show(),$(".mouth-oo").hide()},500),setTimeout(function(){$(".laptop-glow").hide()},500)},2e3)}),$(document).on("click",".video-control",function(){$(this).hasClass("play")?($(".what video").get(0).play(),$(this).removeClass("play").addClass("pause")):($(".what video").get(0).pause(),$(this).removeClass("pause").addClass("play"))})})}});