document.addEventListener("DOMContentLoaded", function () {
  const toggleButtons = document.querySelectorAll(".toggle-menu");
  const sideMenu = document.querySelector(".side-menu-container");
  const mainMenu = document.querySelector(".main-menu");
  const isMobile = window.innerWidth < 768;
  const body = document.body;
  toggleButtons.forEach((btn) => {
    btn.addEventListener("click", (elm) => {
      const isOpen = sideMenu.classList.contains("-translate-x-full");
      sideMenu.setAttribute("aria-hidden", String(!isOpen));
      body.classList.toggle("overflow-hidden", isOpen);
      sideMenu.classList.toggle("-translate-x-full");
    });
  });
  document.addEventListener("click", (e) => {
    const isClickInside =
      sideMenu.contains(e.target) ||
      [...toggleButtons].some((btn) => btn.contains(e.target));
    if (!isClickInside) {
      const isOpen = sideMenu.classList.contains("-translate-x-full");
      if (!isOpen) {
        sideMenu.classList.add("-translate-x-full");
        body.classList.remove("overflow-hidden", isOpen);
      }
    }
  });
  const submenuToggleButtons = document.querySelectorAll(".toggle-sub-menu");
  const submenu = document.querySelector(".sub-menu-container");
  submenuToggleButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      submenu.classList.toggle("hidden");
      if (isMobile) {
        mainMenu.classList.toggle("go-to-side");
      } else {
        sideMenu.classList.toggle("expand-nav");
      }
    });
  });

  const header = document.getElementById("header");
  const headerLogo = document.querySelector(".header-logo");
  const isScroll = header.classList.contains("scroll-header") || false;
  if (isScroll) {
    function handleScroll() {
      const isScrolled = window.scrollY < 350;
      headerLogo.src = `/assets/images/fargo_logo_${
        isScrolled ? "white" : "black"
      }.png`;
      header.classList.toggle("scroll-header", isScrolled);
      header.classList.toggle("text-white", isScrolled);
      header.classList.toggle("bg-white/60", !isScrolled);
      header.classList.toggle("backdrop-blur-lg", !isScrolled);
      header.classList.toggle("shadow-lg", !isScrolled);
    }
    window.addEventListener("scroll", handleScroll);
    handleScroll();
  }

  const readMoreBtns = document.querySelectorAll(".read-more-btn");
  readMoreBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      const container = btn.closest(".parent-el");
      if (!container) return;
      container.querySelectorAll(".hide-content").forEach(function (el) {
        el.classList.toggle("hidden");
      });

      // Optional: Change button text on toggle
      btn.textContent =
        btn.textContent === "Read More" ? "Read Less" : "Read More";
    });
  });
});
