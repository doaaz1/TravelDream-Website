<?php
include 'includes/db_connect.php'; // ربط قاعدة البيانات
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>TravelDream - اليابان</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/japan.css">
    
</head>
<body>
<div class="hero">
    
    <video autoplay muted loop playsinline class="hero-video">
        <source src="images/japan/ss.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay">
        <div class="hero-top">
          <div class="brand">TravelDream</div>

            <nav>
                <a href="index.php">الرئيسية</a>
                <a href="japan.php" class="active">اليابان</a>
                <a href="switzerland.php">سويسرا</a>
                <a href="saudi.php">السعودية</a>
            </nav>
        </div>

        <div class="hero-text">
            <p>رحلة إلى</p>
            <h1>اليابان - Japan</h1>
            <p class="hero-desc">
                أرض الساكورا، الأنمي، المعابد القديمة والتقنية الحديثة في مكان واحد.
            </p>
        </div>
    </div>
</div>

<main>
    <!-- ====== المعالم السياحية ====== -->
<section id="places" class="section">
    <h2>أشهر المعالم اليابانية 🌸</h2>
    <p class="section-desc">أماكن موصى بها أثناء سياحتك في اليابان!</p>

    <div class="card-grid">
        <article class="card tilt animate-on-scroll"
                data-name="معبد كيوتو"
                data-desc="مدينة كيوتو تجمع بين المعابد التقليدية وأشجار الساكورا في جو هادىء.">
            <img src="images/japan/kyoto.jpg" alt="معبد كيوتو">
            <h3>معبد كيوتو</h3>
            <p>معبد كيوتو يمثل جانب اليابان الهادئ والمتوازن. الطبيعة والعمارة التقليدية تتناغم لتُشكّل واحدًا من أكثر الأماكن إلهامًا وهدوءًا في البلاد</p>
        </article>

        <article class="card tilt animate-on-scroll"
                data-name="برج طوكيو"
                data-desc="إطلالة خيالية على طوكيو، خاصةً في الليل مع أضواء المدينة.">
            <img src="images/japan/tokyo-tower.jpg" alt="برج طوكيو">
            <h3>برج طوكيو</h3>
            <p>رمز الحداثة اليابانية ومنظر بانورامي 360°.</p>
        </article>

        <article class="card tilt animate-on-scroll"
                data-name="جبل فوجي"
                data-desc="أشهر جبل في اليابان.">
            <img src="images/japan/fuji.jpg" alt="جبل فوجي">
            <h3>جبل فوجي</h3>
            <p>جبل فوجي رمز اليابان الطبيعي؛ قمة شامخة، طبيعة هادئة، ومنظر يخطف الأنفاس عند كل زيارة.</p>
        </article>
    </div>

    <!-- ====== الأكل الياباني ====== -->
<section class="section">
    <h2>المأكولات اليابانية الشهيرة 🍱</h2>
    <p class="section-desc">أشهر الأطباق اليابانية التي تستحق التجربة ولو لمرة واحدة.</p>

    <div class="card-grid">

        <article class="card tilt animate-on-scroll"
                 data-name="سوشي"
                 data-desc="طبق ياباني تقليدي مكوّن من أرز متبّل ومأكولات بحرية طازجة، يُقدَّم بأسلوب دقيق يعكس جمال المطبخ الياباني.">
            <img src="images/japan/sushi.jpg" alt="سوشي">
            <div class="card-body">
                <h3>سوشي</h3>
                <p>طبق ياباني عريق يقوم على فكرة التوازن؛ قطعة صغيرة تجمع نكهة البحر ودقّة الطهي واحترام المكوّنات. في السوشي، كل لقمة تحمل فلسفة كاملة للطعام.</p>
            </div>
        </article>

        <article class="card tilt animate-on-scroll"
                 data-name="ماتشا"
                 data-desc="شاي أخضر عالي الجودة يُستخدم في مراسم الشاي التقليدية في اليابان، ويُعرف بلونه الزاهي وفوائده الصحية.">
            <img src="images/japan/matcha.jpg" alt="ماتشا">
            <div class="card-body">
                <h3>ماتشا</h3>
                <p>شايٌ أخضر بطقوس هادئة، يُخفق حتى تتشكل رغوة خفيفة على سطحه. يُستخدم منذ قرون في جلسات التأمل ومراسم الشاي، ويُعرف بأنه يمنح الذهن صفاءً وتركّزًا نادرًا.</p>
            </div>
        </article>

        <article class="card tilt animate-on-scroll"
                 data-name="تاكويّاكي"
                 data-desc="أشهر أطعمة الشوارع اليابانية؛ كرات عجين تُحشى بقطع أخطبوط وتُطهى مباشرة أمام الزوّار بطريقة جذابة.">
            <img src="images/japan/takoyaki.jpg" alt="تاكويّاكي">
            <div class="card-body">
                <h3>تاكويّاكي</h3>
                <p>وجبة شارع يابانية تُحضّر أمامك فورًا؛ تُشكَّل في قوالب دائرية وتُقدَّم ساخنة. رغم بساطتها، فهي جزء من روح مدينة أوساكا وشاهد حيّ على الحياة اليومية فيها.</p>
            </div>
        </article>

    </div>
</section>

<section class="section">
    <div class="info-card">
        <img src="images/japan/kimino.jpg" class="info-img" alt="الثقافة اليابانية">
        <div class="info-body">
            <h2>👘 الثقافة اليابانية</h2>
            <p>
    تُعدّ الثقافة اليابانية مزيجًا فريدًا من الحداثة والتقاليد؛
    حيثُ يحرص المجتمع على الانضباط، احترام الوقت، وإتقان العمل مهما كان بسيطًا.
    تظهر هذه الروح في تفاصيل الحياة اليومية، من مراسم الشاي الهادئة إلى ارتداء الكيمونو
    والفنون المعاصرة والأنمي. إنها ثقافة تحفظ الماضي… وتبتكر المستقبل.
</p>

        </div>
    </div>
</section>


<!-- ====== الخريطة السياحية ====== -->
<section class="section">
    <h2>🗾 الخريطة السياحية لليابان</h2>
    <p class="section-desc">استكشف موقع أشهر المدن والمعالم.</p>

    <div class="map-box">
        <iframe
            src="https://www.google.com/maps?q=Japan&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</section>



<!-- ================== قسم التلميحات ================== -->
<section id="tips" class="tips-section">
    <h2>🌸 نصائح الزوار</h2>
    <p class="section-desc">شارك نصيحة ذهبية تساعد أي زائر لليابان 💡</p>

    <?php
    // حفظ التلميح
    if (isset($_POST['send_tip'])) {
        $name = $conn->real_escape_string($_POST['username']);
        $tip  = $conn->real_escape_string($_POST['tip_text']);

        $sql = "INSERT INTO tips (username, tip_text, country) VALUES ('$name', '$tip', 'JP')";
        echo $conn->query($sql)
            ? "<p class='tip-message'> تم حفظ مشاركتك! </p>"
            : "<p class='tip-message error'> خطأ: {$conn->error}</p>";
    }
    ?>

    <!-- نموذج الإدخال -->
    <form method="POST" class="tips-form">
        <label>اسمك:
            <input type="text" name="username" required placeholder="مثال: دعاء">
        </label>

        <label>نصيحتك:
            <textarea name="tip_text" required rows="3" placeholder="مثال:لأماكن السياحية تكون مزدحمة صباح الجمعة، اختر أيام وسط الأسبوع "></textarea>
        </label>

        <button type="submit" name="send_tip">إرسال 🌸</button>
    </form>

    <!-- عرض التلميحات -->
    <h3 class="old-tips-title">📝 نصائح الزوار السابقة:</h3>
    <?php
    $result = $conn->query("SELECT username, tip_text FROM tips WHERE country='JP' ORDER BY id DESC");

    if ($result->num_rows > 0) {
        echo "<div class='tips-list'>";
        while ($row = $result->fetch_assoc()) {
            echo "<div class='tip-item'><p class='tip-text'>“ {$row['tip_text']} ”</p><p class='tip-user'>✍ {$row['username']}</p></div>";
        }
        echo "</div>";
    } else {
        echo "<p class='no-tips'>لاتوجد نصائح حتى الآن</p>";
    }
    ?>
</section>


</main>

<footer class="footer">
    <p>TravelDream © 2025</p>
</footer>
<script src="js/sakura.js"></script>
<script src="js/japan.js" defer></script>
</body>
</html>