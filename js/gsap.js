const aboutTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".gsap-h1",
    // markers: true,
    start: "top 80%",
  },
});

aboutTl.from(".gsap-h1", {
  opacity: 0,
  y: 40,
  duration: 1,
});

aboutTl.from(
  ".gsap-about-card ,.gsap-about-img",
  {
    opacity: 0,
    y: 40,
    duration: 1,
  },
  "-=0.2"
);

const leadingTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".gsap-leading-img",
    // markers: true,
    start: "top 80%",
  },
});
leadingTl.from(".gsap-leading-img", {
  width: "0",
  duration: 1,
});

leadingTl.from(
  ".gsap-leading-content",
  {
    opacity: 0,
    width: "0",
    height: "0",
    duration: 1,
  },
  "-=0.5"
);

leadingTl.from(".gsap-leading-desc", {
  opacity: 0,
});

const menuTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".gsap-menu-tl",
    // markers: true,
    start: "top 30%",
  },
});

menuTl.from(".gsap-menu-card", {
  opacity: 0,
  y: 20,
  duration: 0.7,
  stagger: 0.3,
});

document.querySelectorAll(".gsap-feature-list").forEach((featureList) => {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: featureList,
      start: "top 80%",
      // markers: true,
    },
  });

  tl.from(featureList, {
    opacity: 0,
    y: 20,
    duration: 1,
  });
});


