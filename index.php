<?php include("includes/db_connect.php"); ?>
<?php

// إذا تم إرسال نموذج خطة الرحلة
if (isset($_POST['submit_plan'])) {

    $country = $_POST['country'];
    $start   = $_POST['start'];
    $end     = $_POST['end'];
    $budget  = $_POST['budget'];

    $sql = "INSERT INTO trip_plans (country, start_date, end_date, budget)
            VALUES ('$country', '$start', '$end', '$budget')";

    if (!$conn->query($sql)) {
        echo "<p>خطأ في حفظ الخطة: " . $conn->error . "</p>";
    }
} 
// جلب آخر 3 خطط
$plans_result = $conn->query("SELECT * FROM trip_plans ORDER BY id DESC LIMIT 3");
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <title>TravelDream - الرئيسية</title>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/home.css">

</head>

<body>
  <!-- <header>
    <nav>
      <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="switzerland.php">سويسرا</a></li>
        <li><a href="japan.php">اليابان</a></li>
        <li><a href="saudi.php">السعودية</a></li>
        <li><a href="contact.php">اتصل بنا</a></li>

      </ul>
    </nav>
  </header> -->

<!-- END nav -->
<section class="entry">
  <img src="images/home/saudi5.jpg" alt="">
  <div class="entry-content">
    <h1>سافر بعقلك</h1>
     <p>  وجهات تحلم بها وتجارب تستحق أن تُروى ... اختر مغامرتك القادمة</p>
   <!-- <p>رحلة خفيفة تخليك تتخيل الأجواء قبل ما تسافر فعليًا.</p>-->
   <!-- <a href="#destinations" class="btn">START</a> -->
  </div>
</section>

<section class="intro">
    <h2>استكشف جمال العالم من خلال وجهاتنا المختارة</h2>
    <p>ثلاث وجهات ملهمة ، ثقافات مختلفة، طبيعة ساحرة، وتجارب لا تُنسى. اختر رحلتك وابدأ مغامرتك الآن  </p>
 
</section>

<div class="gallery">

    <div class="card">
      <a href="japan.php" class="links">
        <img src="images/home/japan1.jpg" alt="اليابان">
        <div class="box">
            <h3>اليابان</h3>
            <p>استمتع بتجربة ثقافية غنية تجمع بين التقليد والحداثة</p>
            <a href="japan.php" class="btn">اكتشف المزيد</a>
        </div>
        </a>
    </div>

    <div class="card">
      <a href="saudi.php" class="links">
        <img src="images/home/saudi3.jpg" alt="السعوديه">
        <div class="box">
            <h3>السعودية</h3>
            <p>رحلة عبر التاريخ والثقافة مع المعالم السياحية في مكة والمدينة</p>
            <a href="saudi.php" class="btn">اكتشف المزيد</a> 
          </div>
          </a>
    </div>

    <div class="card">
      <a href="switzerland.php" class="links">
        <img src="images/home/Switzerland1.jpg" alt="سويسرا">
        <div class="box">
            <h3>سويسرا</h3>
            <p> وجهة مثالية لعشّاق الطبيعة حيث الهدوء يلتقي بروعة المناظر الجبلية</p>
            <a href="switzerland.php" class="btn">اكتشف المزيد</a> 
          </div>
      </a>
    </div>

</div>

</div>
<!-- END card -->

<!-- قسم خطة الرحلة -->
<div class="trip-box">

    <h2 class="trip-title">خطة رحلتك</h2>
    <p class="trip-intro">دوّن حلم رحلتك .. </p>

    <!-- نموذج الخطة -->
    <form method="POST" class="trip-form">

        <div class="trip-field">
            <label>الدولة:</label>
            <select name="country" required>
                <option value="JP">اليابان</option>
                <option value="SA">السعودية</option>
                <option value="SW">سويسرا</option>
            </select>
        </div>

        <div class="trip-row">
            <div class="trip-field">
                <label>تاريخ البداية:</label>
                <input type="date" name="start" required>
            </div>

            <div class="trip-field">
                <label>تاريخ النهاية:</label>
                <input type="date" name="end" required>
            </div>
        </div>

        <div class="trip-field">
            <label>الميزانية:</label>
            <input type="number" name="budget" required placeholder="مثال: 3500">
        </div>

        <button type="submit" name="submit_plan" class="trip-btn">إرسال الخطة</button>
    </form>

    <h3 class="trip-last-title">آخر الخطط:</h3>

    <div class="trip-list">
        <?php
if ($plans_result->num_rows > 0) {

    while ($p = $plans_result->fetch_assoc()) {

        echo "
        <div class='trip-card'>
            <p><strong>الدولة:</strong> <span>{$p['country']}</span></p>
            <p><strong>الفترة:</strong> 
                <span>{$p['start_date']} → {$p['end_date']}</span>
            </p>
            <p><strong>الميزانية:</strong> <span>{$p['budget']} ريال</span></p>
        </div>";
    }

} else {
    echo "<p>لا توجد خطط حتى الآن</p>";
}
?> 
    </div>

</div>

<footer class="main-footer">
    <div class="footer-content">

        <p class="footer-title">✈️ TravelDream</p>

        <p class="footer-text">
          نرافقك في رحلتك لاكتشاف أجمل المدن حول العالم
        </p>

        <a href="contact.php" class="footer-btn">تواصل معنا</a>

        <p class="footer-copy">TravelDream © 2025 </p>
    </div>
</footer>

</body>
</html>
