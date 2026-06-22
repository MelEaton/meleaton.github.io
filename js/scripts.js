/*!
 * Off The Wall Murals
 * Multi-page site scripts
 */

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink on scroll
    var navbarShrink = function () {
        const navbar = document.body.querySelector('#mainNav');
        if (!navbar) return;
        if (window.scrollY === 0) {
            navbar.classList.remove('navbar-shrink');
        } else {
            navbar.classList.add('navbar-shrink');
        }
    };

    navbarShrink();
    document.addEventListener('scroll', navbarShrink);

    // Collapse mobile navbar on link click
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const navLinks = [].slice.call(document.querySelectorAll('#navbarResponsive .nav-link'));
    navLinks.forEach(function (link) {
        link.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Lazy-load modal images — only requests images when a modal is opened
    document.querySelectorAll('.portfolio-modal').forEach(function (modal) {
        modal.addEventListener('show.bs.modal', function () {
            this.querySelectorAll('img[data-src]').forEach(function (img) {
                if (!img.getAttribute('src')) {
                    img.setAttribute('src', img.getAttribute('data-src'));
                }
            });
        });
    });

    // Hero viewfinder carousel — crossfade between slides
    const heroCarousel = document.querySelector('.hero-carousel');
    if (heroCarousel) {
        const slides = [].slice.call(heroCarousel.querySelectorAll('.hero-carousel-slide'));
        if (slides.length > 1) {
            let activeIndex = slides.findIndex(slide => slide.classList.contains('active'));
            if (activeIndex === -1) activeIndex = 0;
            setInterval(function () {
                const nextIndex = (activeIndex + 1) % slides.length;
                slides[activeIndex].classList.remove('active');
                slides[nextIndex].classList.add('active');
                activeIndex = nextIndex;
            }, 5000);
        }
    }

});
