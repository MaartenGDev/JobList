const mobileNavigation = document.getElementById('mobile-nav');
let navigationIsShown = false;

mobileNavigation.addEventListener("click", () => {

    let list = document.querySelectorAll('li.nav-item');

    [].forEach.call(list, (item) => {
        item.style.display = navigationIsShown ? 'none' : 'block';
    });

    navigationIsShown = !navigationIsShown;
});


window.onload = () => {
    const jobs = document.querySelectorAll('.job-list__item');
    let height = 0;
    const buttonHeight = 50;

    jobs.forEach(job => {
        height = Math.max(job.offsetHeight, height);
    });

    height += buttonHeight;

    jobs.forEach(job => {
       job.style.height = `${height}px`;
    });
}