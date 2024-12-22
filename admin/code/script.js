// script.js
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const sidebar = document.querySelector('aside');

    menuBtn.addEventListener('click', () => {
        sidebar.classList.toggle('d-none');
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.toggle('d-none');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            sidebar.classList.remove('d-none');
        }
    });
});
