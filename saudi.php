<?php
// ربط قاعدة البيانات
include("includes/db_connect.php");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Explore Saudi Arabia!</title>
    <link rel="stylesheet" href="css/sa.css">
</head>
<body>

<!-- فيديو الجمال -->
<video class="header-video" autoplay muted loop playsinline>
    <source src="images/saudi/c2.mp4" type="video/mp4">
</video>

<!-- الهيدر -->
<nav>
    <div class="nav-links">
        <ul>
            <li><a href="index.php">الرئيسية</a></li>
            <li><a href="japan.php">اليابان</a></li>
            <li><a href="switzerland.php">سويسرا</a></li>
            <li><a href="saudi.php">السعودية</a></li>
        </ul>
    </div>
</nav>
<div class="text-box">
    <h1>أهلاً بكم في السعودية</h1>
    <p>السعودية وطن يجمع بين أصالة الماضي وروعة الحاضر، تمتد جذوره في التاريخ وتزدهر رؤيته نحو مستقبل يليق بعظمته.</p>
</div>

<!-- قسم المعالم -->
<section class="landmark">
    <h1>تعرف على أشهر المناطق في السعودية</h1>
    
    <p>السعودية أرض تجمع بين سحر الطبيعة وعبق التاريخ، في كل منطقة حكاية جمال لا تُنسى</p>
    <div class="row">
        <div class="landmark-col">
            <img src="images/saudi/alula.jpg" alt="العُلا">
            <div class="content">
                <h2>العُلا</h2>
                <p>أعظم من أن تُختصر في وصف، فهي ذاكرة الزمن وروح الحضارة. كل صخرة فيها تحكي عن مجدٍ خالد لا تبلغه الكلمات.</p>
            </div>
        </div>
        <div class="landmark-col">
            <img src="images/saudi/meccaa.jpg" alt="مكه">
            <div class="content">
                <h2>مكه</h2>
                <p>مكةُ المكرمةُ روحُ الإسلامِ وقلـبُه، فيها يتجلّى السكونُ رغم ازدحامِ القلوب. هي مهبطُ الوحي، وفي رحابِها يشعرُ المرءُ بأنّ الأرضَ تقتربُ من السماء.</p>
            </div>
        </div>
        <div class="landmark-col">
            <img src="images/saudi/jeddahAlbalad.jpg" alt="جدة التاريخية">
            <div class="content">
                <h2>جدة التاريخية</h2>
                <p>جدّة التاريخية .. سحر الماضي وعبق البحر بين أزقتها تنبض الحكايات القديمة، وتروي ملامحها قصة مدينة لا تشيخ.</p>
            </div>
        </div>
    </div>
</section>
<!-- قسم الطعام -->
<section class="food">
    <h1 class="titlea">رحلة عبر أكلات المملكة</h1>
    <p>استمتع بتجربة المذاق السعودي الأصيل بنكهات كل منطقة</p>
    <div class="food-grid">
        <figure class="food-card">
            <img src="images/saudi/jareesh.jpg" alt="الجريش">
            <figcaption>
                <h3>الجريش في نجد – طعم التراث</h3>
                <p>الجريش طبق نجدي يُحضّر من القمح المجروش واللحم، ويقدّم ساخنًا مع نكهة السمن أو البصل المقلي.</p>
            </figcaption>
        </figure>
        <figure class="food-card">
            <img src="images/saudi/kabsa.jpg" alt="الكبسة">
            <figcaption>
                <h3>الكبسة – قلب المائدة السعودية</h3>
                <p>الكبسة أشهر طبق سعودي، تُطهى بالأرز واللحم أو الدجاج والبهارات العطرية، وتُجسّد دفء الضيافة.</p>
            </figcaption>
        </figure>
        <figure class="food-card">
            <img src="images/saudi/a1.jpg" alt="العريكة">
            <figcaption>
                <h3>العريكة – نكهة الأصالة الجنوبية</h3>
                <p>العريكة طبق جنوبي تقليدي مصنوع من الدقيق والعسل والزبدة، يجمع الأصالة والمذاق الحلو الدافئ.</p>
            </figcaption>
        </figure>
    </div>
</section>

<div class="vision-box">
    <h2>رؤية المملكة 2030</h2>
    <p>
        المملكة العربية السعودية تسعى لتحقيق تنمية مستدامة وشاملة، 
        تعزيز الاقتصاد الوطني، وتوفير بيئة حياة أفضل لجميع المواطنين والمقيمين. 
        تشمل الرؤية تطوير القطاعات الاقتصادية، الاجتماعية، والثقافية، 
        مع الحفاظ على الهوية الوطنية وتعزيز مكانة المملكة عالميًا.

        </p>
</div>
<!-- ====== الخريطة السياحية للسعودية ====== -->
<section class="sa-map-section">
    <h2>الخريطة السياحية للسعودية</h2>
    <p class="sa-map-p">استكشف موقع أشهر المدن والمعالم في المملكة العربية السعودية.</p>

    <div class="sa-map-box">
        <iframe
            src="https://www.google.com/maps?q=Saudi%20Arabia&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>
<!-- قسم النصائح -->
<section class="tips-section">
    <div class="tips-box">
        <h1 class="tips-title">من صوت الزائر</h1>
        <p class="tips-desc">هل زرت السعودية؟ اكتب لنا رأيك</p>

        <!-- نموذج الإدخال -->
        <form method="POST" class="tips-form">
            <input type="text" name="username" placeholder="مثال: جوري" required>
            <textarea name="tip_text" placeholder="مثال: جده في الشتاء تبدو خلابة!" required rows="4"></textarea>
            <button type="submit" name="send_tip">إرسال</button>
        </form>
        <!-- حفظ النصائح -->
        <?php
        if (isset($_POST['send_tip'])) {
            $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
            $tip      = trim(mysqli_real_escape_string($conn, $_POST['tip_text']));

            echo '<div style="margin-top:15px;">';
            if (!$username || !$tip) {
                echo '❌ الرجاء إدخال اسمك وتعليقك قبل الإرسال!';
            } else {
                $sql = "INSERT INTO tips (username, tip_text, country) VALUES ('$username', '$tip', 'SA')";
                echo $conn->query($sql) ? '✔️ تم حفظ نصيحتك بنجاح!' : '❌ خطأ: ' . $conn->error;
            }
            echo '</div>';
        }
        ?>
        <!-- عرض النصائح -->
        <h3>نصائح الزوار السابقة:</h3>
        <?php
        $result = $conn->query("SELECT username, tip_text FROM tips WHERE country='SA' ORDER BY id DESC");

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
</section>
<footer class="footer">
<p>TravelDream © 2025 - MADE WITH LOVE</p>
</footer>
<script src="css/js/sa.js"></script>
</body>
</html>