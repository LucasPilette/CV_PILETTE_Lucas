// EFFET MENU AU SCROLL

let headerEffect = document.querySelector('.navMenu');

window.addEventListener('scroll', () => {
    let scrollPos = window.scrollY;
    if (scrollPos >= 100) {
        headerEffect.id = 'navMenuAfter';
    } else {
        headerEffect.id = '';
    }
})

// REDIRECTION PAGE SUR LE CLICK DU MENU

document.querySelectorAll('a[href^="#"]').forEach(elem =>{
    elem.addEventListener("click", e => {
        e.preventDefault();
        document.querySelector(elem.getAttribute('href')).scrollIntoView({
            behavior:"smooth",
            offsetTop: 50
        });
    });
})