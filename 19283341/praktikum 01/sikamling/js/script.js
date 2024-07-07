const hamburger_menu = document.querySelector(".hamburger-menu");
const menu_nav = document.querySelector(".menu-nav");

hamburger_menu.addEventListener("click", () => {
  hamburger_menu.classList.toggle("active");
  menu_nav.classList.toggle("active");
});

document.querySelectorAll(".nav-links").forEach((n) =>
  n.addEventListener("click", () => {
    hamburger_menu.classList.remove("active");
    menu_nav.classList.remove("active");
  })
);
