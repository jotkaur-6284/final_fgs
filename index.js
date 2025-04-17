document.addEventListener("DOMContentLoaded", function () {
    let navbar = document.querySelector(".navbar");
    let searchBox = document.querySelector(".search-box .bx-search");

    if (searchBox) {
        searchBox.addEventListener("click", () => {
            navbar.classList.toggle("showInput");
            searchBox.classList.toggle("bx-x");
            searchBox.classList.toggle("bx-search");
        });
    }

    let navLinks = document.querySelector(".nav-links");
    let menuOpenBtn = document.querySelector(".navbar .bx-menu");
    let menuCloseBtn = document.querySelector(".nav-links .bx-x");

    if (menuOpenBtn) {
        menuOpenBtn.onclick = function () {
            navLinks.style.left = "0";
        };
    }

    if (menuCloseBtn) {
        menuCloseBtn.onclick = function () {
            navLinks.style.left = "-100%";
        };
    }

    let htmlcssArrow = document.querySelector(".htmlcss-arrow");
    let moreArrow = document.querySelector(".more-arrow");
    let jsArrow = document.querySelector(".js-arrow");

    if (htmlcssArrow) {
        htmlcssArrow.onclick = function () {
            navLinks.classList.toggle("show1");
        };
    }

    if (moreArrow) {
        moreArrow.onclick = function () {
            navLinks.classList.toggle("show2");
        };
    }

    if (jsArrow) {
        jsArrow.onclick = function () {
            navLinks.classList.toggle("show3");
        };
    }
});
