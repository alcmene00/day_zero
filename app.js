const navSlide = () => {
  const mobile_nav = document.querySelector(".mobile-nav");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.querySelectorAll(".nav-links li");
  mobile_nav.addEventListener("click", () => {
    //Show nav
    nav.classList.toggle("nav-active");
    //Animate links
    navLinks.forEach((link, index) => {
      if (link.style.animation) link.style.animation = "";
      else
        link.style.animation = `navLinkFade 0.5s ease forwards ${
          index / 5 + 0.2
        }s`;
    });
    //Button animation
    mobile_nav.classList.toggle("toggle");
  });
};

//const app = () => {
navSlide();
//};
