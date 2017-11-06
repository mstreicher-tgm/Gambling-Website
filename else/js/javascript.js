$(".button-collapse").sideNav();
$(".slider").slider();

function rolling() {
  var random = Math.random() * (5700 - 700) + 700;
  document.getElementsByClassName('reel').style.transitionDuration = "6s";
  document.getElementsByClassName('reel').style.transform = "matrix(1, 0, 0, 1, -"+ random +", 0)";
  setTimeout(function () {
    var back = random-5000;
    document.getElementsByClassName('reel').style.transitionDuration = "0s";
    document.getElementsByClassName('reel').style.transform = "matrix(1, 0, 0, 1, "+ back +", 0)";
  }, 6000);
}
5700
