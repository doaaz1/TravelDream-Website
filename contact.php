<?php include("includes/db_connect.php"); ?>

<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/contact.css">
</head>

<body class="contact-page">

  <header>
    <nav>
      <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="japan.php">اليابان</a></li>
        <li><a href="saudi.php">السعودية</a></li>
        <li><a href="switzerland.php">سويسرا</a></li>
        <li><a href="contact.php">اتصل بنا</a></li>

      </ul>
    </nav>
  </header>
<!-- END nav -->

<div class="imghead">
   <div class="overlay">
    <h1>Contact Us</h1>
  </div>
        <img src="images/Contact/Switzerland3.jpg" alt="">
        <h2 id="conh2"> تواصل معنا </h2>
    </div>


  <div class="container">
    <div class="row block-9">
      <div>
        <form action="#" class=" contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="الاسم">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="الايميل">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="رسالة"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="ارسال" class="btn btn-primary">
          </div>
        </form>
        
      </div>



</body>
</html>
