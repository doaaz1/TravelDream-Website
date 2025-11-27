// تغيير خلفية بوكس الرؤية تلقائياً
window.addEventListener('DOMContentLoaded', () => {
    const images = [
        "images/saudi/sa4.jpg",
        "images/saudi/sas.jpg",
        "images/saudi/ss2.jpg",
        "images/saudi/sss.jpg"
    ];
    const box = document.querySelector(".vision-box");
    let i = 0;
    setInterval(() => {
        box.style.backgroundImage = `url(${images[i]})`; 
        i = (i + 1) % images.length;
    }, 1700);
});