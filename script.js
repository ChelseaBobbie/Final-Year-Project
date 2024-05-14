document.addEventListener("DOMContentLoaded", () => {
  const burgerMenu = document.getElementById("burger");
  const topMenu = document.getElementById("topmenu");
  const headerMenu = document.getElementById("headercss");

  burgerMenu.addEventListener("click", function () {
    if (!topMenu.getAttribute("hidden")) {
      topMenu.setAttribute("hidden", true);
    } else {
      topMenu.style.zIndex = 1000000;
      headercss.style.zIndex = 1000;
      topMenu.removeAttribute("hidden");
    }
  });
});
