function init() {
    window.addEventListener('scroll', function (e) {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn  = 30,
            header    = document.querySelector("header");
        if (distanceY > shrinkOn) {
            $('#nav-icon1').css('top','20px');
            header.setAttribute("class", "smaller");
        } else {
            header.removeAttribute("class");
            $('#nav-icon1').css('top','50px');
        }
    });
}
window.onload = init();

$(document).ready(function () {
    $(document).on('click', function (e) {
        var sideNav        = document.getElementById('mySidenav'),
            sidebarOptions = document.getElementsByClassName('sidebar--options')[0],
            sidebarOpen    = document.getElementsByClassName('openSidebar')[0],
            hamburger1     = document.getElementsByClassName('hamburger--line')[0],
            hamburger2     = document.getElementsByClassName('hamburger--line')[1],
            hamburger3     = document.getElementsByClassName('hamburger--line')[2];

        var htmlEl = $('html');

        /**
         * Closes the sidebar and hamburger
         */
        if($('#nav-icon1').hasClass('open')){
            if (e.target != sideNav && e.target != sidebarOpen ) {
                $('#mySidenav').css({'transform': 'translateX(-250px)'});
                $('#nav-icon1').css('transform', 'translateX(20px)');
                $('#nav-icon1').removeClass('open');
            }

        }
        /**
         * Opens sidebar and hamburger
         */
        else if (e.target == hamburger1 || e.target == hamburger2 || e.target == hamburger3 || e.target == sidebarOpen) {
            $('#mySidenav').css({'transform': 'translateX(0px)'});
            $('#nav-icon1').css('transform','translateX(260px)');
            $('#nav-icon1').toggleClass('open');

        }
    });

    $('a').on('click', function() {
        $('header').css({'position': 'fixed', 'top': '0'});
    })
});

