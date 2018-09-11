$(function(){
    $(window).scroll(function (event) {
       totop();
    }); 
    function totop(){
        if ($(this).scrollTop() >= 100) { $(".back-to-top").addClass("back-to-top-active"); }
        if ($(this).scrollTop() < 100) { $(".back-to-top").removeClass("back-to-top-active"); }
    }
    totop();
    $(".back-to-top").click(function (event) { $("html,body").animate({ scrollTop: "0px" }, 666) });
})