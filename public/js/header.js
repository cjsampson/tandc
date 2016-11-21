function init() {
  window.addEventListener('scroll', function(e){
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        shrinkOn = 200,
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
        // console.log(e.target)
        var sidebar = $('.sidenav', '#main');
        if (!sidebar.is(e.target) && sidebar.has(e.target).length === 0) {
            sidebar.removeClass('active');
        }
        if (e.target !== sidebar) 
            sidebar.removeClass('active')
    });
});
