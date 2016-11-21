function init() {
  window.addEventListener('scroll', function(e){
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 35,
        header = document.querySelector("header");
    if (distanceY > shrinkOn) {
      header.setAttribute("class","smaller");
    } else {
        header.removeAttribute("class");
    }
  });
}
window.onload = init()


$(document).ready(function() {
  document.getElementById("contact--button").onclick = function () {
    location.href = "/contact";
  }
});


$(document).ready(function() {
    $('.openSidebar').on('click', function() {
        $('.sidenav').toggleClass('active');
    });
    $(document).on('click', function(e) {
        var sideNav = document.getElementById('mySidenav');
        var sidebarOpen =document.getElementsByClassName('openSidebar')[0];
        if (e.target != sideNav && e.target != sidebarOpen) {
            $('.sidenav').removeClass('active');
        }
    });
});
