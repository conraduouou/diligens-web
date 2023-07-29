window.onscroll = function () { myFunction() };

var header = document.getElementById("myNavbar");
var stick = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > stick) {
        header.classList.add("FixedHeader");
    } else {
        header.classList.remove("FixedHeader");
    }
}