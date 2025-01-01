<?php
session_start();

// ตรวจสอบว่า session ถูกตั้งค่าหรือยัง
if(!isset($_SESSION['username'])) {
    header("Location: login.php"); // ถ้าไม่มี session จะต้องไปที่หน้า login
    exit();
}

$username = $_SESSION['username']; // ดึงข้อมูล username จาก session
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
  <p>Congratulations! You have successfully logged in.</p>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

</body>
</html>
