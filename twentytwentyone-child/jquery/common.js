jQuery(window).scroll(function(){jQuery(document).scrollTop()<=0?jQuery(".navbar").removeClass("fixed-me"):jQuery(".navbar").addClass("fixed-me")}),
$(function(){$('#navbarResponsive ul li a[href*="#"]:not([href="#"])').click(function(){return target=$(this.hash),
$(".topnavbar").outerHeight(),$("html, body").animate({scrollTop:target.offset().top-81},900),!1}),
$('a.toplogo[href*="#"]:not([href="#"])').click(function(){return target=$(this.hash),
$(".topnavbar").outerHeight(),$("html, body").animate({scrollTop:target.offset().top},900),!1}),
$('a.btnscroll[href*="#"]:not([href="#"])').click(function(){return target=$(this.hash),$(".topnavbar").outerHeight(),$("html, body").animate({scrollTop:target.offset().top-81},900),!1})
}),
$('a.fottlogo[href*="#"]:not([href="#"])').click(function() {
    return target = $(this.hash),
        $(".topnavbar").outerHeight(), $("html, body").animate({
            scrollTop: target.offset().top
        }, 900), !1
}),
$(document).ready(function(){$("#nav-icon1").click(function(){$(this).toggleClass("open")}),$("ul.navbar-nav li a").on("click",function(){$(".navbar-collapse").collapse("hide")}),$("ul.navbar-nav li a").on("click",function(){$(".navbar-toggle").removeClass("open")})}),
jQuery(document).ready(function(){jQuery(window).scroll(function(){jQuery(this).scrollTop()>220?jQuery(".back-to-top").fadeIn(500):jQuery(".back-to-top").fadeOut(500)}),jQuery(".back-to-top").click(function(t){return t.preventDefault(),jQuery("html, body").animate({scrollTop:0},500),!1})});
jQuery("img.lazyload").addClass('lazypreload');

jQuery(window).scroll(function(){jQuery(document).scrollTop()<=0?jQuery(".navbar").removeClass("fixed-me"):jQuery(".navbar").addClass("fixed-me")}),
$(function(){$('.footerTop ul li a[href*="#"]:not([href="#"])').click(function(){return target=$(this.hash),
$(".topnavbar").outerHeight(),$("html, body").animate({scrollTop:target.offset().top-81},900),!1})})