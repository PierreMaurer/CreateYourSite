window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
        document.getElementById("arrow-down").style.height = "30px";
    } else {
        document.getElementById("arrow-down").style.height = "90px";
    }
}