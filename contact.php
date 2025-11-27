<?php include("includes/db_connect.php"); ?>

<?php

// التحقق من أن النموذج تم إرساله
if (isset($_POST['send_msg'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    
    if ($conn->query($sql)) {
        echo "تم إرسال الرسالة بنجاح!";
    } else {
        echo "خطأ في إرسال الرسالة: " . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <title>Contact - تواصل معنا</title>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/contact.css">
</head>

<body class="contact-page">

  <header>
    <nav>
      <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="japan.php">اليابان</a></li>
        <li><a href="switzerland.php">سويسرا</a></li>
        <li><a href="saudi.php">السعودية</a></li>
      </ul>
    </nav>
  </header>
<!-- END nav -->

<div class="imghead">
   <div class="overlay">
    <h1>تواصل معنا</h1>
  </div>
        <img src="images/Contact/Switzerland3.jpg" alt="">
    </div>

<p id="contact-text">إذا كانت لديك أي استفسارات أو تحتاج إلى دعم، لا تتردد في التواصل معنا من خلال النموذج أدناه</p>

<form method="POST" class="contact-form">
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="الاسم" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="الايميل" required>
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" rows="7" placeholder="رسالة" required></textarea>
    </div>
    <button type="submit" name="send_msg" class="btn btn-primary">ارسال</button>
</form>


<footer class="footer">
   2025 © TravelDream
</footer>

</body>
</html>
