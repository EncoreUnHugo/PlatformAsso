// Animation de chargement
document.addEventListener('DOMContentLoaded', () => {
    // Animation de la barre de progression
    setTimeout(() => {
        document.querySelector('.progress-bar').style.width = '75%';
    }, 300);

    // Animation des éléments au chargement
    const animateElements = [
        document.querySelector('.project-card'),
        document.querySelector('.status-badge'),
        document.querySelector('.progress-bar-container'),
        ...document.querySelectorAll('.bg-gray-50')
    ];

    animateElements.forEach((el, index) => {
        if (el) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(10px)';
            
            setTimeout(() => {
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 100 + 300);
        }
    });
});