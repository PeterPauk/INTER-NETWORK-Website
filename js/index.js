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

const activePage = window.location;
const navLinks = document.querySelectorAll("nav a").forEach((link) => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add('active');
  }
});
