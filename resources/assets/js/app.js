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
    console.log('lets go');
    const jobs = document.querySelectorAll('.job-list__item');
    let height = 0;

    jobs.forEach(job => {
        if(job.offsetHeight > height){
            height = job.offsetHeight;
        }
    });

    jobs.forEach(job => {
       job.style.height = (height + 50) + 'px';
    });
}