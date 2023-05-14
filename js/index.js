function changeBg() {
  var navbar = document.getElementById("navbar");
  var btn = document.getElementById("btn");
  var scrollValue = window.scrollY;
  var night = document.getElementById("nightA");

  if (scrollValue > 1) {
    navbar.classList.add("bgColor");
  } else {
    navbar.classList.remove("bgColor");
  }
}
window.addEventListener("scroll", changeBg);



