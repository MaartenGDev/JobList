const mobileNavigation = document.getElementById('mobile-nav');
let navigationIsShown = false;

mobileNavigation.addEventListener("click", () => {

    let list = document.querySelectorAll('li.nav-item');

    [].forEach.call(list, (item) => {
        item.style.display = navigationIsShown ? 'none' : 'block';
    });

    navigationIsShown = !navigationIsShown;
});