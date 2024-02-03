document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu');
    const nav = document.querySelector('nav');
    const body = document.querySelector('body');
    

    menuButton.addEventListener('click', function () {
        nav.classList.toggle('show');

    });
   

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 0) {
            nav.classList.add("shrink");
            body.classList.add("shrink");
        } else {
            nav.classList.remove("shrink");
            body.classList.remove("shrink");
        }
    });
});

