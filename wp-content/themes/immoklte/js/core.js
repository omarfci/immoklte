var $html=$("html"),$body=$("body"),$header=$("#header"),$navBar=$("#nav-bar"),headerHeight=$header.height(),stickyBarrier=$(window).height()-$navBar.height()-2,outBarrier=2*$header.height(),scrolled=0;
window.setHeader=function(){scrolled=$(window).scrollTop();scrolled>headerHeight&&!$header.hasClass("fixed")?($header.addClass("fixed"),$header.hasClass("absolute")||$body.css("padding-top",headerHeight+"px")):scrolled<=headerHeight&&$header.hasClass("fixed")&&($header.removeClass("fixed"),$header.hasClass("absolute")||$body.css("padding-top",0));scrolled>outBarrier&&!$header.hasClass("out")?$header.addClass("out"):scrolled<=outBarrier&&$header.hasClass("out")&&$header.removeClass("out");scrolled>
stickyBarrier&&!$header.hasClass("sticky")?($header.addClass("sticky"),$body.addClass("sticky-header")):scrolled<=stickyBarrier&&$header.hasClass("sticky")&&($header.removeClass("sticky"),$body.removeClass("sticky-header"))};
var Okno={init:function(){this.Basic.init();this.Component.init()},Basic:{init:function(){this.mobileDetector();this.backgrounds();this.masonry();this.navPrimary();this.searchBar();this.filter();this.map();this.scroller();this.sidePanel()},mobileDetector:function(){var a={Android:function(){return navigator.userAgent.match(/Android/i)},BlackBerry:function(){return navigator.userAgent.match(/BlackBerry/i)},iOS:function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)},Opera:function(){return navigator.userAgent.match(/Opera Mini/i)},
Windows:function(){return navigator.userAgent.match(/IEMobile/i)},any:function(){return a.Android()||a.BlackBerry()||a.iOS()||a.Opera()||a.Windows()}};window.trueMobile=a.any()},backgrounds:function(){$(".bg-image").each(function(){var a=$(this).children("img").attr("src");$(this).css("background-image","url("+a+")").children("img").hide()});$(".bg-parallax").parallax({zIndex:0});$(".bg-slideshow").owlCarousel({singleItem:!0,autoPlay:4E3,pagination:!1,navigation:!1,navigationText:!1,slideSpeed:1500,
transitionStyle:"fade",mouseDrag:!1,touchDrag:!1});var a=$(".bg-video");a&&a.YTPlayer();trueMobile&&a.hasClass("bg-video")&&(a.prev(".bg-video-placeholder").show(),a.remove())},animations:function(){$(".animated").appear(function(){$(this).each(function(){var a=$(this),b=$(this).data("animation-delay");setTimeout(function(){a.addClass(a.data("animation")).addClass("visible")},b)})})},masonry:function(){var a=$(".masonry","#content");a.masonry({columnWidth:".masonry-sizer",itemSelector:".masonry-item",
percentPosition:!0});a.imagesLoaded().progress(function(){a.masonry("layout")});a.on("layoutComplete",Waypoint.refreshAll())},navPrimary:function(){var a=$("#nav-primary"),b=a.find(".has-dropdown, .has-megamenu").children("a");$('[data-toggle="mobile-menu"]').on("click",function(){$body.toggleClass("mobile-nav-open");a.slideToggle(300);return!1});b.on("click",function(){992>$(window).width()&&$(this).next("ul, .megamenu").slideToggle(300);return!1});window.setNavPrimary=function(){992<=$(window).width()&&
(a.show(),b.next("ul, .megamenu").each(function(){$(this).show()}));992>$(window).width()&&(a.hide(),$body.removeClass("mobile-nav-open"))}},scroller:function(){$("#header");var a=$("#nav-bar").height();$("#mobile-nav");var b=$("section","#content"),d=0;d=-a;var c=$('[data-target="local-scroll"]');$body.hasClass("one-page")&&(c=$('#header, [data-target="local-scroll"]'));c.find("a").on("click",function(){$(this).blur()});c.localScroll({offset:d,duration:800,easing:"easeOutCubic"});var e=$("#nav-primary li > a"),
h=function(a){e.each(function(){var b=$(this).attr("href");a==b?$(this).addClass("active"):$(this).removeClass("active")})};b.waypoint({handler:function(a){"up"==a&&h("#"+this.element.id)},offset:function(){return-this.element.clientHeight+a}});b.waypoint({handler:function(a){"down"==a&&h("#"+this.element.id)},offset:function(){return a+1}});$(window).resize(function(){setTimeout(function(){Waypoint.refreshAll()},600)})},searchBar:function(){$("#search-bar");$('[data-toggle="search-bar"]').on("click",
function(){$("body").toggleClass("search-bar-open");return!1})},filter:function(){var a=$("#filter-bar");if(0<$("#filter-bar").length){var b=a.offset().top,d;window.setFilterBar=function(){d=$(window).scrollTop();d>b&&a.addClass("fixed");d<=b&&a.removeClass("fixed")};var c=a.find(".selector");window.setFilterSelector=function(){var b=a.find(".filter li.active");c.css({width:b.width()+"px",left:b.offset().left+"px"})};setFilterSelector()}var e=$(".filter"),h=$(".filter-isotope"),f,g;h.each(function(){f=
$($(this).data("filter-list"));f.hasClass("masonry")?f.isotope({itemSelector:".masonry-item",percentPosition:!0,masonry:{columnWidth:".masonry-sizer"}}):f.isotope()});e.on("click","a",function(){f=$($(this).parents(".filter").data("filter-list"));g=$(this).attr("data-filter");f.children().filter(".not-matched").removeClass("not-matched");"*"!=g&&f.children().filter(g).addClass("not-matched");$(this).parents("ul").find(".active").removeClass("active");$(this).parent("li").addClass("active");setFilterSelector();
return!1});h.on("click","a",function(){f=$($(this).parents(".filter-isotope").data("filter-list"));g=$(this).attr("data-filter");f.isotope({filter:g});$(this).parents("ul").find(".active").removeClass("active");$(this).parent("li").addClass("active");return!1})},map:function(){var a=$("#google-map");if(0<a.length){var b=a.data("latitude"),d=a.data("longitude");a.data("style");var c=a.data("style");a={zoom:14,center:new google.maps.LatLng(b,d),mapTypeId:google.maps.MapTypeId.ROADMAP,mapTypeControl:!1,
panControl:!1,zoomControl:!0,scaleControl:!1,streetViewControl:!1,scrollwheel:!1,styles:eval(c)};a=new google.maps.Map(document.getElementById("google-map"),a);c="dark"==c?"assets/img/location-pin-light.png":"assets/img/location-pin.png";b=new google.maps.LatLng(b,d);new google.maps.Marker({position:b,map:a,icon:c})}},sidePanel:function(){$('[data-toggle="side-panel"]').on("click",function(){$body.toggleClass("side-panel-open");return!1});$(".nav-panel a").on("click",function(){if(-1==$(this).attr("href").indexOf(".html"))return $body.removeClass("side-panel-open"),
!1})}},Component:{init:function(){this.carousel();this.counter();this.counterdown();this.lightbox();this.twitterFeed();this.forms();this.instagramFeed();this.videoBox()},carousel:function(){$(".carousel").each(function(){var a=$(this).data("items");var b=$(this).data("single-item");var d=$(this).data("autoplay");var c=$(this).data("transition")?$(this).data("transition"):!1;var e=$(this).data("pagination")?!0:!1;var h=$(this).data("navigation")?!0:!1;var f="fade"==c?!1:!0;var g="fade"==c||0==e||0==
h?!1:!0;$(this).owlCarousel({items:a,itemsDesktop:[1199,Math.ceil(.6*a)],itemsDesktopSmall:[991,Math.ceil(.5*a)],itemsTablet:[768,Math.ceil(.4*a)],itemsMobile:[479,Math.ceil(.2*a)],singleItem:b,autoPlay:d,pagination:e,navigation:h,navigationText:!1,slideSpeed:800,stopOnHover:g,transitionStyle:c,mouseDrag:f,touchDrag:f,addClassActive:!0})})},cookiePopup:function(){if(""==function(a){a+="=";for(var b=document.cookie.split(";"),c=0;c<b.length;c++){for(var e=b[c];" "==e.charAt(0);)e=e.substring(1);if(0==
e.indexOf(a))return e.substring(a.length,e.length)}return""}("cookieStatus")){$body.append('<div id="tmp_container"></div>');var a=$("#tmp_container");a.load("assets/api/cookies-popup.html",function(){$body.append(a.html());a.remove();var b=$("#modalCookies");setTimeout(function(){b.modal("show");$body.addClass("modal-at-bottom")},1E3);b.on("hide.bs.modal",function(a){a=new Date;a.setTime(a.getTime()+31536E6);a="expires="+a.toUTCString();document.cookie="cookieStatus=true; "+a;$body.removeClass("modal-at-bottom")})})}},
counter:function(){$(".counter-value").counterUp({delay:10,time:1E3})},counterdown:function(){$(".countdown").each(function(){var a=$(this).data("date"),b=eval($(this).data("labels"));$(this).countdown(a,function(a){var c='<span class="time">%H:%M:%S</span>';0<a.offset.days&&(c='<span class="days">%-d <span>'+b[1]+"</span></span> "+c);0<a.offset.weeks&&(c='<span class="weeks">%-w <span>'+b[0]+"</span></span> "+c);$(this).html(a.strftime(c))})})},lightbox:function(){lightbox.option({disableScrolling:!0})},
twitterFeed:function(){$(".twitter-feed").each(function(){var a=$(this).data("count");$(this).twittie({apiPath:"assets/api/twitter/tweet.php",count:a,template:'{{tweet}} - <span class="date">{{date}}</span>'})})},typing:function(){$(".typing").appear(function(){$(this).each(function(){var a=[$(this).html()];$(this).html("");$(this).typed({strings:a,startDelay:1E3,typeSpeed:30,contentType:"html"})})})},instagramFeed:function(){var a=$("#instagram-feed");if(0<a.length){var b=a.data("limit");a=a.data("resolution")?
a.data("resolution"):"thumbnail";(new Instafeed({accessToken:"2969283166.1677ed0.e859dad53f0b4f6cab807252cb20a682",userId:"2969283166",get:"user",target:"instagram-feed",template:'<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>',limit:b,resolution:a})).run()}},forms:function(){var a=$("#notification-bar");$("#notification-bar").find(".close-it");var b=function(b,c){a.html("<div class="+b+">"+c+'<a href="#" class="close-it"><i class="ti-close"></i></a></div>');setTimeout(function(){a.addClass("visible")},
400);setTimeout(function(){a.removeClass("visible")},1E4)};$body.delegate("#notification-bar .close-it","click",function(){a.removeClass("visible");return!1});$(".validate-form").each(function(){$(this).validate({validClass:"valid",errorClass:"error",onfocusout:function(a,b){$(a).valid()},errorPlacement:function(a,b){return!0},rules:{email:{required:!0,email:!0}}})});var d=$(".sign-up-form");0<d.length&&d.submit(function(){var a=$(this).find(".btn-submit"),c=$(this),d,e=$(this).data("message-success"),
k=$(this).data("message-error");c.valid()&&(a.addClass("loading"),$.ajax({type:c.attr("method"),url:c.attr("action"),data:c.serialize(),cache:!1,dataType:"jsonp",jsonp:"c",contentType:"application/json; charset=utf-8",error:function(b){setTimeout(function(){a.addClass("error")},1200)},success:function(c){"success"!=c.result?(d="error",b("error",k)):(d="success",b("success",e));setTimeout(function(){a.addClass(d)},400)},complete:function(b){setTimeout(function(){a.removeClass("loading error success")},
1E4)}}));return!1});d=$(".contact-form");if(0<d.length){var c=d.find(".g-recaptcha"),e;d.submit(function(){var a=$(this).find(".btn-submit"),d=$(this),g,l=$(this).data("message-success"),k=$(this).data("message-error");0<c.length?0!=grecaptcha.getResponse().length?(e=!0,c.removeClass("error")):(e=!1,c.addClass("error"),setTimeout(function(){c.removeClass("error")},1E3)):e=!0;d.valid()&&e&&(a.addClass("loading"),$.ajax({type:"POST",url:"assets/php/contact-form.php",data:d.serialize(),error:function(b){setTimeout(function(){a.addClass("error")},
1200)},success:function(c){"success"!=c?(g="error",b("error",k)):(g="success",b("success",l));setTimeout(function(){a.addClass(g)},400)},complete:function(b){setTimeout(function(){a.removeClass("loading error success");0<c.length&&grecaptcha.reset()},1E4)}}));return!1})}},modal:function(){$(".modal[data-timeout]").each(function(){var a=$(this).data("timeout"),b=$(this);setTimeout(function(){b.modal("show")},a)})},videoBox:function(){$(".video-box.placeholder-image .btn-play").on("click",function(){var a=
'<iframe src="'+$(this).attr("href")+'" autoplay="1"></iframe>',b=$(this).parents(".video-box");b.addClass("playing");var d=b.outerWidth(),c=b.outerHeight();$(this).siblings(".image").html(a);b.find("iframe").css({width:d+"px",height:c+"px"});return!1})}}};$(document).ready(function(){Okno.init()});$(document).keyup(function(a){27==a.keyCode&&$body.removeClass("search-bar-open")});$(window).scroll(function(){setHeader();0<$("#filter-bar").length&&setFilterBar()});
$(window).resize(function(){setNavPrimary();0<$("#filter-bar").length&&setFilterSelector()});$(window).load(function(){Okno.Component.typing();$("#page-loader").fadeOut(500,function(){Okno.Basic.animations();Okno.Component.modal();1==$html.data("cookies-popup")&&Okno.Component.cookiePopup()})});