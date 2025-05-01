document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('overlay');
    
    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    closeMobileMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    overlay.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                }
            }
        });
    });
    
    // Responsive adjustments for elements
    function handleResponsiveElements() {
        // Add any additional responsive JS here if needed
    }
    
    // Initial call
    handleResponsiveElements();
    
    // Call on resize
    window.addEventListener('resize', handleResponsiveElements);
});