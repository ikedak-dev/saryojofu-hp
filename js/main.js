const feature = document.querySelector(".js-feature");
const featureTitle = document.querySelector(".js-feature-title");
function updateFeature() {
  var isTablet = window.innerWidth >= 768; // ウィンドウ幅を再評価
  if (isTablet) {
    feature.classList.add("p-feature--reverse");
    featureTitle.classList.add("c-leading--right-aligned");
  } else {
    feature.classList.remove("p-feature--reverse");
    featureTitle.classList.remove("c-leading--right-aligned");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  updateFeature(); 

  window.addEventListener("resize", updateFeature);
});