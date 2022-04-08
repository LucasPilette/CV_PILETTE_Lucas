console.log('oui');

let headerEffect = document.querySelector('.navMenu');

console.log(headerEffect);

window.addEventListener('scroll', () => {
    let scrollPos = window.scrollY;
    if (scrollPos >= 100) {
        headerEffect.id = 'navMenuAfter';
    } else {
        headerEffect.id = '';
    }
})