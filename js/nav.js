const arrowButtons = document.querySelectorAll('.js-nav-toggle');
const navs = document.querySelectorAll('.js-nav-sublist');
const arrow = document.querySelectorAll('.js-arrow');

arrowButtons.forEach((arrowButton, index) => {
  arrowButton.addEventListener("click", () => {
    // navの表示切り替え
    navs[index].classList.toggle("is-active");
    arrow[index].classList.toggle("is-active");
  });
});