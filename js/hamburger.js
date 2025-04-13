document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".js-hamburger");
  const hamburgerLines = document.querySelectorAll(".js-hamburger-line"); 
  const nav = document.querySelector(".js-nav");

  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active");
    nav.classList.toggle("is-active");
    hamburgerLines.forEach(line => {
      line.classList.toggle("is-active");
    });
  });
});