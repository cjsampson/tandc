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


// $(document).ready(function() {
//   $('#mySidenav').
// })
// $(document).ready(function() {
//   $('.open--close--sidebar').on('click', function() {
//     document.getElementsClassName("mySidenav").style.width = "250px";
//     document.getElementById("main").style.marginLeft = "250px";
//     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
//   });
// })
// <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}