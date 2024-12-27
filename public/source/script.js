// Cursor animation
const cursorDot = document.querySelector("[data-cursor-dot]");
const cursorOutline = document.querySelector("[data-cursor-outline]");

if (cursorDot && cursorOutline) {
    window.addEventListener("mousemove", function(e) {
        const posX = e.clientX;
        const posY = e.clientY;

        cursorDot.animate({
            left: `${posX}px`,
            top: `${posY}px`
        }, { duration: 200, fill: "forwards" });

        cursorOutline.animate({
            left: `${posX}px`,
            top: `${posY}px`
        }, { duration: 500, fill: "forwards" });
    });
}

// Typing animation
document.addEventListener('DOMContentLoaded', (event) => {
    if (typeof Typed !== 'undefined') {
        var typed = new Typed('#typing-text', {
            strings: ['JUNIOR DEVELOPER', 'GRAPHIC DESIGNER', 'MOBILE DEVELOPER'],
            typeSpeed: 100,
            backSpeed: 50,
            loop: true,
            loopCount: Infinity,
            startDelay: 1000,
        });
    }
});

// Navbar hide on scroll
const navbar = document.getElementById('onScroll-hide');
let lastScrollTop = 0;
let isScrolling;

function handleScroll() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // Scrolling down
        navbar.style.transform = 'translateY(-100%)';
    } else {
        // Scrolling up
        navbar.style.transform = 'translateY(0)';
    }

    lastScrollTop = scrollTop;

    clearTimeout(isScrolling);
    isScrolling = setTimeout(() => {
        navbar.style.transform = 'translateY(0)';
    }, 300);
}

window.addEventListener('scroll', handleScroll);

// Theme toggle
const themeToggleBtn = document.getElementById('theme-toggle');
const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

if (themeToggleBtn && themeToggleDarkIcon && themeToggleLightIcon) {
    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    themeToggleBtn.addEventListener('click', function() {
        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }
        } else {
            // if NOT set via local storage previously
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }
    });
}

// Mobile menu toggle
const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
        mobileMenuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
    });
}
