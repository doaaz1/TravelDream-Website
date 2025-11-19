<?php include("includes/db_connect.php"); ?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>رحلة إلى اليابان 🇯🇵</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>رحلة إلى اليابان 🇯🇵</h1>
<p>استكشف سحر الثقافة اليابانية، وتعرّف على أفضل المعالم والأكلات!</p>
<hr>

<section>
  <h2>🌸 أشهر المعالم</h2>
  <ul>
    <li>برج طوكيو</li>
    <li>جبل فوجي</li>
    <li>كيوتو القديمة</li>
  </ul>

  <h2>🍣 أكلات يابانية</h2>
  <ul>
    <li>سوشي</li>
    <li>رامن</li>
    <li>تاكوياكي</li>
  </ul>
</section>

<hr>
<h2>💬 نصائح الزوّار</h2>

<form method="POST" action="">
  <input type="text" name="name" placeholder="اسمك" required><br><br>
  <textarea name="tip" placeholder="اكتب تلميحك..." required></textarea><br><br>
  <button type="submit" name="submit">أرسل التلميح</button>
</form>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $tip = $_POST['tip'];

  $sql = "INSERT INTO tips (name, tip, country_code)
          VALUES ('$name', '$tip', 'JP')";
  if ($conn->query($sql) === TRUE) {
      echo "<p>🎉 تم حفظ تلميحك بنجاح!</p>";
  } else {
      echo "<p>❌ خطأ أثناء الحفظ: " . $conn->error . "</p>";
  }
}
?>

<hr>
<h3>📜 تلميحات الزوار السابقة:</h3>
<?php
$result = $conn->query("SELECT name, tip FROM tips WHERE country_code='JP' ORDER BY id DESC");

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='tip-box'><strong>{$row['name']}:</strong> {$row['tip']}</div><br>";
  }
} else {
  echo "<p>لا توجد تلميحات بعد 🌱</p>";
}
$conn->close();
?>

</body>
</html>
