
<?php include("includes/db_connect.php");
 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $tip = mysqli_real_escape_string($conn, $_POST['tip']);
    mysqli_query($conn, "INSERT INTO tips (username, tip) VALUES ('$username', '$tip')");
    header("Location: " . $_SERVER['PHP_SELF']);    
    exit;
}


$res = mysqli_query($conn, "SELECT * FROM tips ORDER BY id DESC");
$tips = [];
while($row = mysqli_fetch_assoc($res)) {
    $tips[] = $row;
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Explore Saudi Arabia!</title>
    <link rel="stylesheet" href="css/sa.css">
    
</head>
<body>
<!-- قسم الهيدر -->
<section class="header">
<nav>
    <div class="nav-links">
        <ul>
            <li><a href="">الرئيسية</a></li>
            <li><a href="">اليابان</a></li>
            <li><a href="">فرنسا</a></li>
            <li><a href="">السعودية</a></li>
        </ul>
    </div>
</nav>
<div class="text-box"> 
    <h1>اهلًا بكم في السعودية</h1>
    <p>السعودية وطن يجمع بين أصالة الماضي وروعة الحاضر تمتد جذوره في التاريخ وتزدهر رؤيته نحو مستقبل يليق بعظمته</p>
</div>
</section>

<!-- قسم المعالم -->
<section class="landmark">
  <h1>تعرف على أشهر المناطق في السعودية</h1>
  <p>السعودية أرض تجمع بين سحر الطبيعة وعبق التاريخ، في كل منطقة حكاية جمال لا تُنسى</p>
  <div class="row">
    <div class="landmark-col">
        <img src="https://images.unsplash.com/photo-1687371836972-3485aad61187?q=80&w=927&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        <div class="content">
        <h2>العُلا</h2>
        <p>أعظم من أن تُختصر في وصف، فهي ذاكرة الزمن وروح الحضارة. كل صخرة فيها تحكي عن مجدٍ خالد لا تبلغه الكلمات.</p>
        </div>
    </div>
    <div class="landmark-col">
        <img src="images/saudi/abha.jpg">
        <div class="content">
        <h2>أبها</h2>
        <p>عروس الجنوب وسيدة الجمال، تكسوها الغيوم وتحتضنها الجبال. في نسيمها راحة، وفي طبيعتها لوحة لا تُنسى.</p>
        </div>
    </div>
    <div class="landmark-col">
        <img src="https://i.pinimg.com/1200x/d0/a1/f6/d0a1f61bcf2be693f550c938e2b25b73.jpg">
        <div class="content">
        <h2>جدة التاريخية</h2>
        <p>جدّة التاريخية .. سحر الماضي وعبق البحر بين أزقتها تنبض الحكايات القديمة، وتروي ملامحها قصة مدينة لا تشيخ.</p>
        </div>
    </div>
  </div>
</section>

<!-- قسم الطعام -->
<section class="food">
  <h1 class="titlea">نكهات سعودية تقليدية تروي حكاية كل منطقة</h1>
  <div class="food-grid">
    <figure class="food-card">
        <img src="https://cdn.foochia.com/media/87e3b4c2-ad57-414d-b431-1f04a31984b0.webp">
        <figcaption>
            <h3>الجريش في نجد – طعم التراث</h3>
            <p>الجريش طبق نجدي يُحضّر من القمح المجروش واللحم، ويقدّم ساخنًا مع نكهة السمن أو البصل المقلي.</p>
        </figcaption>
    </figure>
    <figure class="food-card">
        <img src="https://static.webteb.net/images/content/ramadanrecipe_recipe_567_4506e8061f3-6b84-4a2d-a649-8fabd0cd768c.jpg">
        <figcaption>
            <h3>الكبسة – قلب المائدة السعودية</h3>
            <p>الكبسة أشهر طبق سعودي، تُطهى بالأرز واللحم أو الدجاج والبهارات العطرية، وتُجسّد دفء الضيافة.</p>
        </figcaption>
    </figure>
    <figure class="food-card">
        <img src="https://yummy.awicdn.com/site-images/sites/default/files/prod/recipe/d/3/614266/4bc10b83e915752b372cdab165c544b7cf845460-231023165708.jpg">
        <figcaption>
            <h3>العريكة – نكهة الأصالة الجنوبية</h3>
            <p>العريكة طبق جنوبي تقليدي مصنوع من الدقيق والعسل والزبدة، يجمع الأصالة والمذاق الحلو الدافئ.</p>
        </figcaption>
    </figure>
  </div>
</section>

<!-- قسم التلميحات -->
<section class="tips-section">
<h1>من صوت الزائر</h1>
    <p>هل زرت السعودية؟ اكتب لنا رأيك</p>

    <!-- نموذج الإدخال -->
    <form action="" method="POST" class="tips-form">
        <input type="text" name="username" placeholder="اسمك" required><br>
        <textarea name="tip" placeholder="شاركنا رأيك" required></textarea><br>
        <button type="submit" name="send">إرسال</button>
    </form>

    <hr>

    <h2>آراء الزوار</h2>

    <?php
    if(empty($tips)){
        echo "<p>لا توجد تلميحات حتى الآن.</p>";
    } else {
        foreach($tips as $tip){
            echo '<div class="tip-box">';
            echo '<strong>'.htmlspecialchars($tip['username']).':</strong>';
            echo '<p>'.htmlspecialchars($tip['tip']).'</p>';
            echo '</div>';
        }
    }
    ?>
</section>

</body>
</html>


