// Splash logic
window.addEventListener('DOMContentLoaded', () => {
    const splash = document.getElementById('splash');
    const splashLogo = document.getElementById('splashLogo');
    if (splashLogo) {
        splashLogo.onclick = function() {
            splashLogo.classList.add('spin');
            setTimeout(() => {
                splash.classList.add('hide');
                setTimeout(() => {
                    splash.style.display = 'none';
                }, 500);
            }, 1000);
        }
    }
});