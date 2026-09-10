// Lightweight page entrance animation (no artificial navigation delay)
document.addEventListener('DOMContentLoaded', () => {
    const pageContent = document.querySelector('main');
    if (!pageContent) return;

    pageContent.classList.add('transform', 'translate-y-2', 'opacity-0');
    requestAnimationFrame(() => {
        pageContent.classList.remove('opacity-0', 'translate-y-2');
        pageContent.classList.add('opacity-100', 'translate-y-0');
    });
});
