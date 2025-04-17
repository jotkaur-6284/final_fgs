<?php

session_start();
include('config.php');
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: {$hostname}/dashboard.php");
    exit();
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $password = md5($_POST['password']);

    $sql = "SELECT phone, password FROM register WHERE phone = '$phone' AND password = '$password' AND role = 'admin'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) == 1 ){
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_phone'] = $phone;
        $_SESSION['admin_password']= $password;
        header("Location: {$hostname}/dashboard.php");
        exit();
    }
else{
     echo "<script>alert('Access Denied: You are not an admin or wrong credentials.');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login - Add Ragi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #3c3c72;
      --bg-blur: rgba(255, 255, 255, 0.2);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body, html {
      height: 100%;
      width: 100%;
    }

    body {
      background: url('header-bg.jpg') no-repeat center center/cover;
      position: relative;
    }

    .login-wrapper {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(0px);
      background:linear-gradient(
    rgba(0, 0, 0, 0.6),
    rgb(0 0 90 / 50%),
    rgb(0 0 0 / 40%)
  );
    }

    .login-container {
      background-color: var(--bg-blur);
      padding: 2rem 3rem;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
      max-width: 400px;
      width: 100%;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: var(--primary-color);
      font-weight: 600;
    }

    .login-container input {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 15px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.6);
      font-size: 16px;
    }

    .login-container button {
      background-color: var(--primary-color);
      color: #fff;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .login-container button:hover {
      background-color: #2e2e5a;
    }

    @media (max-width: 500px) {
      .login-container {
        padding: 1.5rem 2rem;
      }
    }
  </style>
</head>
<body>
<!--KIRTAN-->
  <div class="login-wrapper">
    <div class="login-container">
      <h2>Admin Login</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="phone" placeholder="Phone" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>
    </div>
  </div>

</body>
</html>
