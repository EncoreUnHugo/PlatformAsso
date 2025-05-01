
// Simple animation on load
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.type-badge, button');
    elements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
    });
    
    setTimeout(() => {
        elements.forEach((el, index) => {
            setTimeout(() => {
                el.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }, 300);
    
    // Add to calendar simulation
    document.querySelector('.bg-indigo-600').addEventListener('click', () => {
        alert('L\'événement a été ajouté à votre calendrier!');
    });
    
    // Share button action
    document.querySelector('.bg-white').addEventListener('click', () => {
        if (navigator.share) {
            navigator.share({
                title: 'Festival des Arts Numériques',
                text: 'Découvrez cet incroyable événement!',
                url: window.location.href
            }).catch(err => console.log('Error sharing:', err));
        } else {
            alert("Fonction de partage non disponible - Copiez le lien manuellement");
        }
    });
});
