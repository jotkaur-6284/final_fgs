<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check Your Certificate</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php" class="back-link"><button type="button" class="btn btn-primary this-button">back</button></a>

<div class="check-certificate">
<div class="check-cert-container">
  <h2>Check Your Amrit Sanchar Certificate</h2>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="uname" placeholder="First Name" required>
    <input type="text" name="lname" placeholder="Last Name" required>
    <input type="text" name="father" placeholder="Father's Name" required>
    <input type="tel" name="phone" placeholder="Phone Number" required>
    <button class="check-btn" type="submit">Check Certificate</button>
  </form>

  <div class="check-message">
    <?php
    session_start();
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      include('config.php');
          $uname = mysqli_real_escape_string($con, $_POST['uname']);
          $lname = mysqli_real_escape_string($con, $_POST['lname']);
          $father = mysqli_real_escape_string($con, $_POST['father']);
          $phone = mysqli_real_escape_string($con, $_POST['phone']);

          $sql = "SELECT * FROM amritreg WHERE uname = '$uname' AND lname = '$lname' AND father = '$father' AND phone = '$phone'";
          $result = mysqli_query($con, $sql);

          if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              $event_date = $row['date'];
              $issue_date = date('Y-m-d', strtotime($event_date . ' +7 days'));
              $today = date('Y-m-d');

              if ($today >= $issue_date) {
                $_SESSION['full_name'] = $uname . ' ' . $lname;
                $_SESSION['address'] = $row['address'];

                  echo "<p>✅ Certificate is ready!</p>";
                  echo "<a href='amritcertificate.php' class='btn'>Download Certificate</a>";
              } else {
                  echo "<p style='color: red;'>Your certificate is not ready! Kindly wait until <strong>$issue_date</strong>.</p>";
              }
          } else {
              echo "<p style='color: red;'>Your certificate is not ready! Kindly wait.</p>";
          }
      }
    ?>
  </div>
</div>
</div>
</body>
</html>
