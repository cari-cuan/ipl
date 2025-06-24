document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add("menu-horizontal");
    document.body.classList.remove("mini-sidebar");
    document.querySelector("html").setAttribute("data-theme", "light");
    // document.querySelector("html").setAttribute("data-sidebar", "light");
    document.querySelector("html").setAttribute("data-color", "primary");
    document.querySelector("html").setAttribute("data-topbar", "white");
    document.querySelector("html").setAttribute("data-layout", "horizontal");
    document.querySelector("html").setAttribute("data-width", "fluid");
    // document.body.classList.add("menu-horizontal");
    // document.body.classList.remove("mini-sidebar");
});