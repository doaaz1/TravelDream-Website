// حركة الثلج
function createSnow() {

    // إنشاء عنصر جديد للثلج
    const snow = document.createElement("div");
    snow.classList.add("snowflake");

    // تحديد حجم عشوائي للثلج
    const size = Math.random() * 4 + 2; 
    snow.style.width = size + "px";
    snow.style.height = size + "px";

    // تحديد مكان السقوط بشكل عشوائي
    snow.style.left = Math.random() * window.innerWidth + "px";

    // تحديد سرعة السقوط
    snow.style.animationDuration = (3 + Math.random() * 4) + "s";

    // إضافة الثلج للصفحة
    document.body.appendChild(snow);

    // الحذف بعد فترة
    setTimeout(function () {
        snow.remove();
    }, 7000);
}

// تكرار إلانشاء
setInterval(createSnow, 200);
