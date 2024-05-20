window.addEventListener('scroll', function() {
    var nav1 = document.querySelector('.nav1');
    var nav2 = document.querySelector('.nav2');
    // console.log(window.scrollY);
    // Check if the scroll position is greater than 50px
    if (window.scrollY > 50) {
        // nav1.style.top = '-50px'; // Hide nav1
        nav1.classList.add('top-[-50px]'); // Fix nav2
        nav2.classList.add('fixed'); // Fix nav2
    } else {
        // nav1.style.top = '0'; // Show nav1
        nav1.classList.remove('top-[-50px]'); // Unfix nav2
        nav1.classList.add('top-0');
        nav2.classList.remove('fixed'); // Unfix nav2
    }
});
