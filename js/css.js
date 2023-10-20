document.addEventListener('DOMContentLoaded', function () {
    // En este caso scroll es el mas fiable
    if (document.body.scrollWidth < 721) {
        let altura = document.getElementsByTagName('header').item(0).scrollHeight;
        document.body.style.background = `linear-gradient(180deg, #00416A ${altura * 1.04 - 10}px, #EBF7FF ${altura * 1.04 + 10}px)`;
    }
});