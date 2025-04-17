<?php
session_start();
include('config.php');

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: {$hostname}/adminlogin.php");
    exit();
}
$admin_phone = $_SESSION['admin_phone'];
$name = "Admin";
$image = "download.jpg";

$sql = "SELECT * FROM register WHERE phone = '$admin_phone' AND role = 'admin'";
$result = mysqli_query($con, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $image = $row['image'];
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fatehgarh Sahib</title>

  <!-- Styles -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div class="dashboard-container">
    <aside class="sidebar">
        <div style="text-align: center; padding: 15px;">
            <img src="<?php echo $image; ?>" alt="Admin Image" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
            <p style="margin-top: 10px; color: white; font-weight: bold;"><?php echo strtoupper($name); ?></p>
            <a href="logout.php" style="color: #ffb3b3; text-decoration: underline;">Logout</a>
        </div>
      <ul>
        <li class="sidebar-link" data-page="daswandh-dashboard.php"><i class="fas fa-tachometer-alt"></i> Daswandh</li>
        <li class="sidebar-link" data-page="deg-parchi-dashboard.php"><i class="fas fa-pen"></i> Deg-parchi</li>
        <li class="sidebar-link" data-page="bhetan-dashboard.php"><i class="fas fa-donate"></i> Bhetan</li>
        <li class="sidebar-link" data-page="query-dashboard.php"><i class="fas fa-hand-holding-heart"></i> Query Box</li>
        <li><i class="fas fa-water"></i> Amrit Sanchar</li>
        <ul class="nested-menu">
          <li class="sidebar-link" data-page="registration-dashboard.php">⮑ Registration</li>
          <li class="sidebar-link" data-page="certification-dashboard.php">⮑ Certification</li>
        </ul>
        <li><i class="fas fa-users"></i> Team Members</li>
        <ul class="nested-menu">
          <li class="sidebar-link" data-page="granthies-dashboard.php">⮑ Granthies</li>
          <li class="sidebar-link" data-page="sewadaar-dashboard.php">⮑ Sewadaar</li>
          <li class="sidebar-link" data-page="ragies-dashboard.php">⮑ Ragies</li>
        </ul>
      </ul>
    </aside>
    <main class="main-content" id="content-area">

    </main>
  </div>

  <!-- AJAX Script -->
  <script>
    $(document).ready(function () {
    $("#content-area").load("welcome-dashboard.html");
      $(".sidebar-link").click(function () {
        const page = $(this).data("page");

        $.ajax({
          url: page,
          method: "GET",
          success: function (response) {
            $("#content-area").html(response);
          },
          error: function () {
            $("#content-area").html("<p>Error loading content.</p>");
          }
        });
      });
    });
  </script>

</body>
</html>
