
// -------------animation--------------------

// script.js

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target); // Animate only once
            }
        });
    }, {
        threshold: 0.1
    });

    items.forEach(item => {
        observer.observe(item);
    });
});
// -------------animation--------------------





// =============animation [ zoom] ====================


document.addEventListener("DOMContentLoaded", function () {
    const zoomIns = document.querySelectorAll('.zoom-in');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    zoomIns.forEach(item => {
        observer.observe(item);
    });
});
// =============animation [ zoom] ====================






// =============animation [ uniform] ====================

document.addEventListener("DOMContentLoaded", function () {
    const galleryImgs = document.querySelectorAll('.gallery-zoom-in');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.2
    });

    galleryImgs.forEach(img => {
        observer.observe(img);
    });
});


// =============animation [ uniform pg] ====================

