window.addEventListener('scroll', () => {
    const image = document.getElementById('moving-image');
    const scrollY = window.scrollY;
    image.style.transform = `translateX(${scrollY - 1000}px)`;
    console.log(scrollY);
    console.log(image.offsetTop);
  });
  