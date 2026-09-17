document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initMobileMenu();
    initTestimonialSlider();
    initProjectsSlider();
    initLazyIframes();
    initBackToTop();
});

function initTheme() {
    const htmlElement = document.documentElement;
    const moonIcon = document.getElementById('moon-icon');
    const sunIcon = document.getElementById('sun-icon');
    const mobileMoonIcon = document.getElementById('mobile-moon-icon');
    const mobileSunIcon = document.getElementById('mobile-sun-icon');
    const themeToggle = document.getElementById('theme-toggle');
    const mobileThemeToggle = document.getElementById('mobile-theme-toggle');

    const currentTheme = localStorage.getItem('color-theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    function updateThemeUI(isDark) {
        htmlElement.classList.toggle('dark', isDark);

        if (moonIcon && sunIcon) {
            moonIcon.classList.toggle('hidden', isDark);
            sunIcon.classList.toggle('hidden', !isDark);
        }

        if (mobileMoonIcon && mobileSunIcon) {
            mobileMoonIcon.classList.toggle('hidden', isDark);
            mobileSunIcon.classList.toggle('hidden', !isDark);
        }
    }

    updateThemeUI(currentTheme === 'dark' || (!currentTheme && prefersDark));

    function toggleTheme() {
        const isDark = htmlElement.classList.contains('dark');
        updateThemeUI(!isDark);
        localStorage.setItem('color-theme', !isDark ? 'dark' : 'light');
    }

    themeToggle?.addEventListener('click', toggleTheme);
    mobileThemeToggle?.addEventListener('click', toggleTheme);
}

function initMobileMenu() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
    });
}

function initTestimonialSlider() {
    const slider = document.getElementById('testimonial-slider');
    const dots = document.querySelectorAll('#testimonial-dots button');
    const prevButton = document.getElementById('prev-testimonial');
    const nextButton = document.getElementById('next-testimonial');

    if (!slider || !dots.length || !prevButton || !nextButton) return;

    let currentSlide = 0;
    const slideCount = document.querySelectorAll('.testimonial-slide').length;
    let autoPlayTimer;

    function updateSliderPosition() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-[#1d4ed8]', index === currentSlide);
            dot.classList.toggle('dark:bg-blue-400', index === currentSlide);
            dot.classList.toggle('bg-gray-300', index !== currentSlide);
            dot.classList.toggle('dark:bg-gray-600', index !== currentSlide);
        });
    }

    function goToSlide(index) {
        currentSlide = index;
        updateSliderPosition();
        updateDots();
    }

    dots.forEach((dot) => {
        dot.addEventListener('click', function () {
            goToSlide(parseInt(this.getAttribute('data-index') || '0', 10));
        });
    });

    prevButton.addEventListener('click', () => {
        goToSlide((currentSlide - 1 + slideCount) % slideCount);
    });

    nextButton.addEventListener('click', () => {
        goToSlide((currentSlide + 1) % slideCount);
    });

    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(() => {
            goToSlide((currentSlide + 1) % slideCount);
        }, 5000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayTimer);
    }

    updateSliderPosition();
    startAutoPlay();

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) stopAutoPlay();
        else startAutoPlay();
    });
}

function loadLazyImage(img) {
    const src = img.dataset.src;
    if (!src) return;
    img.src = src;
    img.removeAttribute('data-src');
}

function initProjectsSlider() {
    const projectsSlider = document.getElementById('projects-slider');
    if (!projectsSlider) return;

    const slides = projectsSlider.querySelectorAll('.project-slide');
    const totalSlides = slides.length;
    const prevBtn = document.getElementById('prev-project');
    const nextBtn = document.getElementById('next-project');
    const projectDots = document.querySelectorAll('#project-dots button');
    const lazyImages = projectsSlider.querySelectorAll('img[data-src]');

    if (!totalSlides) return;

    let currentSlide = 0;
    let autoPlayTimer;

    function loadSlideImage(index) {
        const img = slides[index]?.querySelector('img[data-src]');
        if (img) loadLazyImage(img);
    }

    function preloadAdjacentSlides() {
        loadSlideImage(currentSlide);
        loadSlideImage((currentSlide + 1) % totalSlides);
    }

    function goToSlide(index) {
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;

        currentSlide = index;
        projectsSlider.style.transform = `translateX(-${currentSlide * 100}%)`;
        preloadAdjacentSlides();
        updateProjectDots();
    }

    function updateProjectDots() {
        projectDots.forEach((dot, index) => {
            dot.classList.toggle('opacity-100', index === currentSlide);
            dot.classList.toggle('opacity-50', index !== currentSlide);
        });
    }

    function startAutoPlay() {
        stopAutoPlay();
        autoPlayTimer = setInterval(() => goToSlide(currentSlide + 1), 5000);
    }

    function stopAutoPlay() {
        clearInterval(autoPlayTimer);
    }

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    preloadAdjacentSlides();
                    startAutoPlay();
                    obs.unobserve(entry.target);
                }
            });
        }, { rootMargin: '100px' });

        observer.observe(projectsSlider);
    } else {
        preloadAdjacentSlides();
        startAutoPlay();
    }

    prevBtn?.addEventListener('click', () => goToSlide(currentSlide - 1));
    nextBtn?.addEventListener('click', () => goToSlide(currentSlide + 1));

    projectDots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });

    projectsSlider.addEventListener('mouseenter', stopAutoPlay);
    projectsSlider.addEventListener('mouseleave', startAutoPlay);

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) stopAutoPlay();
        else startAutoPlay();
    });

    goToSlide(0);
}

function initLazyIframes() {
    const lazyIframes = document.querySelectorAll('iframe[data-src]');
    if (!lazyIframes.length) return;

    const loadIframe = (iframe) => {
        if (!iframe.dataset.src) return;
        iframe.src = iframe.dataset.src;
        iframe.removeAttribute('data-src');
    };

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    loadIframe(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { rootMargin: '200px' });

        lazyIframes.forEach((iframe) => observer.observe(iframe));
    } else {
        lazyIframes.forEach(loadIframe);
    }
}

function initBackToTop() {
    const backToTopButton = document.getElementById('back-to-top');
    if (!backToTopButton) return;

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    window.addEventListener('scroll', () => {
        backToTopButton.classList.toggle('opacity-100', window.scrollY > 300);
        backToTopButton.classList.toggle('opacity-0', window.scrollY <= 300);
    }, { passive: true });
}
