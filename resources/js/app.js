import './bootstrap';

// Page transition effect
document.addEventListener('DOMContentLoaded', () => {
    // Elements to animate
    const pageContent = document.querySelector('main');
    
    // Function to animate page entrance
    const animatePageEnter = () => {
        if (!pageContent) return;
        
        // Set initial state
        pageContent.classList.add('transform', 'translate-y-4', 'opacity-0');
        
        // Trigger animation after a small delay
        setTimeout(() => {
            pageContent.classList.remove('opacity-0', 'translate-y-4');
            pageContent.classList.add('opacity-100', 'translate-y-0');
        }, 50);
    };
    
    // Function to animate page exit
    const animatePageExit = (targetUrl) => {
        if (!pageContent) return;
        
        // Animate out
        pageContent.classList.remove('opacity-100', 'translate-y-0');
        pageContent.classList.add('opacity-0', 'translate-y-4');
        
        // Navigate after animation completes
        setTimeout(() => {
            window.location.href = targetUrl;
        }, 300);
    };
    
    // Animate page entrance on initial load
    animatePageEnter();
    
    // Add transition effect when clicking internal links
    document.addEventListener('click', (e) => {
        const anchor = e.target.closest('a');
        
        if (
            anchor && 
            anchor.href && 
            anchor.href.startsWith(window.location.origin) && 
            !anchor.hasAttribute('data-no-transition') &&
            anchor.target !== '_blank' &&
            !e.ctrlKey && !e.metaKey // Allow opening in new tab with Ctrl/Cmd+click
        ) {
            e.preventDefault();
            animatePageExit(anchor.href);
        }
    });
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', (e) => {
        // Prevent default only if we want to handle the navigation ourselves
        e.preventDefault();
        animatePageExit(window.location.href);
    });
});
