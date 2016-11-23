function init() {
    window.addEventListener('scroll', function (e) {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn  = 30,
            header    = document.querySelector("header");
        if (distanceY > shrinkOn) {
            header.setAttribute("class", "smaller");
        } else {
            header.removeAttribute("class");
        }
    });
}
window.onload = init();


$(document).ready(function () {
    document.getElementById("contact--button").onclick = function () {
        location.href = "/contact";
    }
});

$(document).ready(function () {
    $(document).on('click', function (e) {
        var sideNav        = document.getElementById('mySidenav'),
            sidebarOptions = document.getElementsByClassName('sidebar--options')[0],
            sidebarOpen    = document.getElementsByClassName('openSidebar')[0],
            hamburger1     = document.getElementsByClassName('hamburger--line')[0],
            hamburger2     = document.getElementsByClassName('hamburger--line')[1],
            hamburger3     = document.getElementsByClassName('hamburger--line')[2];
        console.log();
        console.log(e.target, hamburger2);
        if (e.target != sideNav && e.target != sidebarOpen && e.target != hamburger1 && e.target != hamburger2 && e.target != hamburger3 && e.target != sidebarOptions) {
            $('.sidenav').removeClass('active');
            $('#nav-icon1').removeClass('open');
        } else if (e.target == hamburger1 || e.target == hamburger2 || e.target == hamburger3 || e.target == sidebarOpen) {
            $('#nav-icon1').toggleClass('open');
            $('.sidenav').toggleClass('active');

        }
    });
});

$(function () {
    $('#tabs').tabs();
});