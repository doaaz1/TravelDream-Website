//  تأثير ثلج بسيط وواقعي
function createSnow() {
    const snow = document.createElement("div");
    snow.classList.add("snowflake");

    // حجم عشوائي 
    const size = Math.random() * 4 + 3;
    snow.style.width = size + "px";
    snow.style.height = size + "px";

    snow.style.left = Math.random() * window.innerWidth + "px";
    snow.style.animationDuration = (4 + Math.random() * 4) + "s";

    document.body.appendChild(snow);

    setTimeout(() => snow.remove(), 9000);
}

setInterval(createSnow, 700);
