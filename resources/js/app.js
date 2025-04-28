import './bootstrap';

function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        const copiedMessage = document.getElementById('phoneCopied');
        copiedMessage.classList.remove('hidden');
        setTimeout(() => copiedMessage.classList.add('hidden'), 2000);
    });
}

window.toggleMenu = toggleMenu;
window.copyToClipboard = copyToClipboard;

document.addEventListener('DOMContentLoaded', () => {
    const carouselItems = document.getElementById('carouselItems');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const totalSlides = carouselItems.children.length;
    let currentIndex = 0;

    function updateCarousel() {
        const offset = -currentIndex * 100;
        carouselItems.style.transform = `translateX(${offset}%)`;
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateCarousel();
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateCarousel();
    });
});
