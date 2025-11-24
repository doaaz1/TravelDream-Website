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

<!-- الهيدر -->
<section class="header">
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
        <p>السعودية وطن يجمع بين أصالة الماضي وروعة الحاضر.</p>
    </div>
</section>

<!-- قسم المعالم -->
<section class="landmark">
    <h1>أشهر المناطق في السعودية</h1>
    <div class="row">
        <div class="landmark-col"><div class="content"><h2>العُلا</h2></div></div>
        <div class="landmark-col"><div class="content"><h2>أبها</h2></div></div>
        <div class="landmark-col"><div class="content"><h2>جدة التاريخية</h2></div></div>
    </div>
</section>

<!-- قسم الطعام -->
<section class="food">
    <h1 class="titlea">نكهات سعودية تقليدية</h1>
    <div class="food-grid">
        <figure class="food-card"><figcaption><h3>الجريش</h3></figcaption></figure>
        <figure class="food-card"><figcaption><h3>الكبسة</h3></figcaption></figure>
        <figure class="food-card"><figcaption><h3>العريكة</h3></figcaption></figure>
    </div>
</section>

<!-- قسم التلميحات -->
<section class="tips-section">
<h1>من صوت الزائر</h1>
<p>هل زرت السعودية؟ اكتب لنا رأيك:</p>

<form action="" method="POST" class="tips-form">
    <input type="text" name="username" placeholder="اسمك" required>
    <textarea name="tip" placeholder="شاركنا رأيك" required></textarea>
    <button type="submit" name="send">إرسال</button>
</form>

<hr>

<h2>آراء الزوار</h2>
<div class="tips-container">

<?php
// --- جزء PHP اللي يتعامل مع قاعدة البيانات ---
// إضافة التلميحات
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $tip = mysqli_real_escape_string($conn, $_POST['tip']);
    mysqli_query($conn, "INSERT INTO tips (username, tip) VALUES ('$username', '$tip')");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// جلب التلميحات
$res = mysqli_query($conn, "SELECT * FROM tips ORDER BY id DESC");
$tips = [];
while($row = mysqli_fetch_assoc($res)) {
    $tips[] = $row;
}

// عرض التلميحات
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

</div>
</section>

</body>
</html>