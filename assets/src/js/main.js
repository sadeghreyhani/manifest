
// active button
var header = document.getElementById("js-nav__active");
var btns = header.getElementsByClassName("c-navbar__link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}

// Search Box
const searchToggle = document.getElementsByClassName("is-open");
const searchBox = document.getElementsByClassName("js-search-box");
const searchToggleClose = document.getElementsByClassName("is-close");
const searchBoxDotted = document.getElementsByClassName("js-search-box__item")[0];
searchToggle[0].addEventListener("click", function () {
  searchBox[0].style.display = "block";
  searchBox[0].style.animation = "menuAnimation 0.6s";
});
searchToggleClose[0].addEventListener("click", function () {
  searchBox[0].style.display = "none";
});
  searchBoxDotted.addEventListener("click" , () => {
      searchBoxDotted.classList.toggle("searchBoxBorder");
  });


// hamburger menu
const toggleButton = document.getElementsByClassName("c-toggle-button")[0];
const navbarLinks = document.getElementsByClassName("js-navbar-links")[0];
toggleButton.addEventListener("click", () => {
  navbarLinks.classList.toggle("active");
  navbarLinks.style.animation = "menuAnimation 1s";
  toggleButton.classList.toggle("open");
});





var carouselOption = document.querySelector(".js-carousel");
var flkty = new Flickity(carouselOption, {
  freeScroll: true,
  wrapAround: true,
  groupCells: 2,
});
