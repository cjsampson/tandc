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
        $('.sidenav').css({ 'width': '250px' });
        $('main').css({ 'opacity': '0.5' });
        $('header').css({ 'opacity': '0.5' });
    });
  
    $('.closeSidebar').on('click', function() {
        $('.sidenav').css({ 'width': 0 });
        $('main').css({ 'opacity': '1' });
        $('header').css({ 'opacity': '1' });
    });

});