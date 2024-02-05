document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('.menu');
    const nav = document.querySelector('nav');
    const body = document.querySelector('body');

    menuButton.addEventListener('click', function () {
        nav.classList.toggle('show');
    });

    let lastScrollPosition = 0;

    window.addEventListener("scroll", function () {
        const currentScrollPosition = window.pageYOffset;

        if (currentScrollPosition > lastScrollPosition) {
            // Scrolling down
            nav.classList.add("shrink");
            body.classList.add("shrink");
        } else {
            // Scrolling up
            nav.classList.remove("shrink");
            body.classList.remove("shrink");
        }

        lastScrollPosition = currentScrollPosition;
    });
});
