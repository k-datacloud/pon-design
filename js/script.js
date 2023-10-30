

document.addEventListener('scroll', function () {
    const header = document.getElementById("header");
    const scroll = window.scrollY;
    if (scroll > 20) {
        header.classList.add("header-active");
    } else {
        header.classList.remove("header-active");
    }
})

const scrollbtn = document.querySelector(".smooth-btn")

document.addEventListener('scroll', function () {
    const scroll = window.scrollY;
    if (scroll > 180) {
        scrollbtn.classList.add("smooth-btnact")
    } else {
        scrollbtn.classList.remove("smooth-btnact")
    };
});

scrollbtn.addEventListener('click', function () {
    window.scroll({
        behavior: "smooth",
        top: 0
    });
});

function togglemenu() {
    document.querySelector('.line1').classList.toggle('line1a')
    document.querySelector('.line2').classList.toggle('line2a')
    document.querySelector('.line3').classList.toggle('line3a')
    document.querySelector('.header__nav').classList.toggle('menu-act')
};

let humburger = document.querySelector('.humburger')

humburger.addEventListener('click', function () {
    togglemenu();
});










