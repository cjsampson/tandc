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
    $('#tabs').tabs();

    document.getElementById("contact--button").onclick = function () {
        location.href = "/contact";
    }
});

// $(document).ready(function () {
//     $(document).on('click', function (e) {
//         var sideNav        = document.getElementById('mySidenav'),
//             sidebarOptions = document.getElementsByClassName('sidebar--options')[0],
//             sidebarOpen    = document.getElementsByClassName('openSidebar')[0],
//             hamburger1     = document.getElementsByClassName('hamburger--line')[0],
//             hamburger2     = document.getElementsByClassName('hamburger--line')[1],
//             hamburger3     = document.getElementsByClassName('hamburger--line')[2];

//         var bodyEl = $('body');

//         if (e.target != sideNav && e.target != sidebarOpen && e.target != hamburger1 && e.target != hamburger2 && e.target != hamburger3 ) {
//             bodyEl.css({'transform': 'translateX(0px)'});
//             console.log('2')
//             // $('.sidenav').removeClass('active');
//             $('#nav-icon1').removeClass('open');
//         } else if (e.target == hamburger1 || e.target == hamburger2 || e.target == hamburger3 || e.target == sidebarOpen) {
//             console.log('1');
//             bodyEl.css({'transform': 'translateX(250px)'});
//             $('#nav-icon1').toggleClass('open');
//             // $('.sidenav').toggleClass('active');

//         }
//     });

//     $('a').on('click', function() {
//         $('header').css({'position': 'fixed', 'top': '0'});
//     })
// });

// <script>
//            $(document).ready(function(){
//                $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
//                    $(this).toggleClass('open');
//                });
//            });
// </script>