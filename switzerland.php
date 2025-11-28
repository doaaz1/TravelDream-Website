<?php include("includes/db_connect.php"); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>سويسرا - TravelDream</title>
    <link rel="stylesheet" href="css/sw.css">
</head>

<body>

<!--  الهيدر  -->
<header class="hero" style="background-image:url('images/switzerland/3.jpg');">
    <div class="hero-overlay container">

        <div class="hero-top">
            <div class="brand">TravelDream</div>
            <nav>
                <a href="index.php">الرئيسية</a>
                <a href="switzerland.php" class="active">سويسرا</a>
                <a href="japan.php">اليابان</a>
                <a href="saudi.php">السعودية</a>
            </nav>
        </div>

        <div class="hero-text">
            <p class="hero-label">رحلة إلى</p>
            <h1>سويسرا - Switzerland</h1>
            <p class="hero-desc">بلد الجبال والثلوج … هدوء ما بعده هدوء</p>
        </div>

    </div>
</header>


<!--  المحتوى  -->
<div class="container main-content">

    <!-- الأماكن السياحية -->
    <div class="section-box">
        <h2>أشهر الأماكن السياحية</h2>
        <p class="section-note">أجمل المناطق التي تستحق زيارتك</p>

        <div class="items-grid">

            <div class="item-card">
                <img src="images/switzerland/matterhorn.jpg" class="item-img">
                <h3>جبل ماترهورن</h3>
                <p>جبل مشهور بشكله المثالي لمحبي التصوير.</p>
            </div>

            <div class="item-card">
                <img src="images/switzerland/interlaken.jpg" class="item-img">
                <h3>إنترلاكن</h3>
                <p>مدينة هادئة بين بحيرتين؛ الأفضل للأنشطة والمغامرات.</p>
            </div>

            <div class="item-card">
                <img src="images/switzerland/geneva.jpg" class="item-img">
                <h3>بحيرة جنيف</h3>
                <p>بحيرة واسعة بإطلالات خلابة وممشى جميل.</p>
            </div>

        </div>
    </div>

    <!-- الأكلات -->
    <div class="section-box">
        <h2>الأكلات السويسرية</h2>
        <p class="section-note">أكلات لذيذة مناسبة للأجواء الباردة</p>

        <div class="items-grid">

            <div class="item-card">
                <img src="images/switzerland/fondue.jpg" class="item-img">
                <h3>روستي</h3>
                <p> بطاطس مبشورة محمرة بطريقة لذيذة.</p>
            </div>
            <div class="item-card">
                <img src="images/switzerland/rosti.jpg" class="item-img">
                <h3>فوندو الجبن</h3>
                <p> جبن ذائب يُقدم ساخن مع الخبز. </p>
            </div>

            <div class="item-card">
                <img src="images/switzerland/choco.jpg" class="item-img">
                <h3>الشوكولاتة السويسرية</h3>
                <p>ناعمة وغنية وتُعتبر الأفضل عالميًا.</p>
            </div>

        </div>
    </div>
<!--  الثقافة السويسرية  -->
<section class="culture-banner">
    <div class="culture-content">
        <h1>الثقافة السويسرية </h1>
        <p>
            تُعرف الثقافة السويسرية بتنوعها الكبير بين التقاليد الألمانية والفرنسية والإيطالية،
            مما يجعلها واحدة من أجمل وأعمق الثقافات الأوروبية.  
            تتميز سويسرا بالهدوء، احترام الوقت، الذوق الرفيع، ودقة التفاصيل في الحياة اليومية.
        </p>
    </div>
</section>

<!-- الخريطة السياحية -->
<section class="section">
    <h2> الخريطة السياحية لسويسرا🗺️</h2>
    <p class="section-desc">استكشف موقع أشهر المدن والمعالم السويسرية.</p>

    <div class="map-box">
        <iframe
            src="https://www.google.com/maps?q=Switzerland&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>

    <!-- قسم النصائح  -->
    <div id="tips" class="section-box">
        <h2>نصائح الزوار</h2>
        <p class="section-note">  هل زرت سويسرا من قبل؟ شاركنا سرّك الصغير ليستفيد منه القادمون بعدها🩵</p>

        <!-- نموذج الإرسال -->
        <form method="POST" class="item-card tips-form">
            
            <label>اسمك:
                <input type="text" name="username" required placeholder="مثال: سمية">
            </label>

            <label>نصيحتك:
                <textarea name="tip_text" required rows="3" placeholder="مثال: احجزي القطار مبكرًا!"></textarea>
            </label>

            <button type="submit" name="send_tip">إرسال </button>
        </form>

        <!--  حفظ  -->
      <?php
if (isset($_POST['send_tip'])) {

    $name = $_POST['username'];
    $tip  = $_POST['tip_text'];

    $sql = "INSERT INTO tips (username, tip_text, country)
            VALUES ('$name', '$tip', 'SW')";

    if ($conn->query($sql)) {
        echo "<p>✔ تم حفظ تعليقك بنجاح!</p>";
    } else {
        echo "<p>❌ خطأ: " . $conn->error . "</p>";
    }
}
?>
        <!-- عرض  -->
        <h3>نصائح الزوار السابقة:</h3>
       <?php
$result = $conn->query("SELECT username, tip_text FROM tips WHERE country='SW' ORDER BY id DESC");

if ($result->num_rows > 0) {
    echo "<div class='tips-list'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='tip-item'><strong>{$row['username']}</strong><p>{$row['tip_text']}</p></div>";
    }
    echo "</div>";
} else {
    echo "<p>لا توجد نصائح بعد</p>";
}
?>

    </div>
</div>


<footer class="footer">
   2025 © TravelDream
</footer>

<script src="css/js/sw.js"></script>
</body>
</html>