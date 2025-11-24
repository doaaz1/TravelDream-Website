//حركه الثلج 
    function createSnow() {
        const snow = document.createElement("div");
        snow.classList.add("snowflake");

        const size = Math.random() * 4 + 2; 
        snow.style.width = `${size}px`;
        snow.style.height = `${size}px`;

        snow.style.left = Math.random() * window.innerWidth + "px";

        snow.style.animationDuration = (3 + Math.random() * 4) + "s";

        document.body.appendChild(snow);

        setTimeout(() => snow.remove(), 7000);
    }

    setInterval(createSnow, 200);