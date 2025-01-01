<?php
session_start();
include("include/config.php");
error_reporting(0);

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $loginpassword = $_POST['loginpassword'];
    $hashedpassword = hash('sha256', $loginpassword); // แฮชรหัสผ่าน

    try {
        // ตรวจสอบข้อมูลผู้ใช้ในฐานข้อมูล
        $query = "SELECT * FROM userdata WHERE username=:username AND loginpassword=:loginpassword";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':loginpassword', $hashedpassword, PDO::PARAM_STR);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            $_SESSION['username'] = $username;  // เก็บ session เมื่อเข้าสู่ระบบสำเร็จ
            echo "<script type='text/javascript'>";
            echo "alert('เข้าสู่ระบบเรียบร้อย');";
            echo "document.location='index.php';";
            echo "</script>";
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('Username หรือ Password ไม่ถูกต้อง');";
            echo "document.location='login.php';";
            echo "</script>";
        }
    } catch(PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login Page</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">UserName:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username" required>
    </div>
    <div class="form-group">
      <label for="loginpassword">Password:</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="Enter password" name="loginpassword" required>
    </div>
    <button type="submit" class="btn btn-success" name="login">Login</button>
  </form>
  <p>If you don't have an account, <a href="signup.php">register here</a>.</p>
</div>

</body>
</html>
