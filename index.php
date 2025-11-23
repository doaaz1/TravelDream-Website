<?php include("includes/db_connect.php"); ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <title>TravelDream</title>

<link rel="stylesheet" href="css/home.css">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="switzerland.php">سويسرا</a></li>
        <li><a href="japan.php">اليابان</a></li>
        <li><a href="saudi.php">السعودية</a></li>
        <li><a href="contact.php">اتصل بنا</a></li>

      </ul>
    </nav>
  </header>
<!-- END nav -->
<section class="entry">
  <img src="images/home/saudi5.jpg" alt="">
  <div class="entry-content">
    <h1>سافر بعقلك</h1>
     <p>اكتشف الأجواء قبل أن تنطلق في رحلتك</p>
   <!-- <p>رحلة خفيفة تخليك تتخيل الأجواء قبل ما تسافر فعليًا.</p>-->
   <!-- <a href="#destinations" class="btn">START</a> -->
  </div>
</section>

<section class="intro">
    <h2>اكتشف وجهاتنا السياحية المميزة</h2>
    <p> نقدم لك فرصة فريدة لاستكشاف ثلاث من أفضل الوجهات السياحية في العالم. سواء كنت تخطط للزيارة أو تحلم بالتجربة، ستتمكن من اكتشاف الأجواء الفريدة لكل من اليابان، سويسرا، و السعودية قبل أن تنطلق في مغامرتك  </p>
 
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
            <p>اكتشف جمال جبال الألب الساحرة والأنشطة الجبلية المتنوعة</p>
            <a href="switzerland.php" class="btn">اكتشف المزيد</a> 
          </div>
      </a>
    </div>

</div>

</div>
<!-- END card -->



</body>
</html>
