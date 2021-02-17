//Header fixed//
$(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if(scroll >= 100){
            $('.main-nav, #menu-bar').addClass("white").css({"fill": "#000"});
        }
        else{
            $('.main-nav, #menu-bar').removeClass("white").css({"fill": "#fff"});
        }

    });

});


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}