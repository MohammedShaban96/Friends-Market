function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtnShow");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}
function gotoStore(){
    var click = document.getElementById("#div-design");

}
$(document).ready(function(){
    $('#carouselExampleIndicators').carousel({
        interval: 3000
    });
});