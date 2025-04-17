<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('config.php');

    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $father = mysqli_real_escape_string($con, $_POST['father']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $sql = "INSERT INTO amritreg(uname, lname, father, phone, email, address, date) VALUES('$uname','$lname','$father','$phone','$email','$address','$date')";
    if (mysqli_query($con, $sql)) {
        echo "<script>
            window.onload = function() {
                const msg = document.querySelector('.success-message');
                msg.innerText = 'Registration successful! Certificate will be sent on your mail after $date. Kindly check your email.';
                msg.style.display = 'block';
                setTimeout(() => { msg.style.display = 'none'; }, 8000);
            };
        </script>";
    } else {
        echo "<script>alert('Registration failed!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register For Amrit Sanchar</title>
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">



  <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->

  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>

<body>
<div class="amrit-sanchar-container">
  <nav>
    <div class="navbar">
        <i class='bx bx-menu'></i> <!-- Menu icon -->
        <div class="logo"><a href="#">Logo</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">Logo</span>
                <i class='bx bx-x'></i> <!-- Close icon -->
            </div>
            <ul class="links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="daswandh.php">ਦਸਵੰਧ</a></li>
                <li>
                    <a href="deg.php">ਦੇਗ</a>
                </li>
                <li>
                    <a href="#">ਅੰਮ੍ਰਿਤ ਸੰਚਾਰ</a>
                    <i class='bx bxs-chevron-down js-arrow arrow'></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="amritReg.php">Booking</a></li>
                        <li><a href="checkcertificate.php">Certificate</a></li>
                    </ul>
                </li>
                <li><a href="bhetan.php">ਭੇਟਾ</a></li>
                <li><a href="nitnem.html">ਨਿਤਨੇਮ</a></li>
            </ul>
        </div>
        <!--<div class="search-box">-->
            <!--<i class='bx bx-search'></i> &lt;!&ndash; Search icon &ndash;&gt;-->
            <!--<div class="input-box">-->
                <!--<input type="text" placeholder="Search...">-->
            <!--</div>-->
        <!--</div>-->
        <div class="btnDiv">
        <?php
            if (isset($_SESSION['phone'])) {
                echo '<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>';
            } else {
                echo '<a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>';
                echo '<a href="log.php"><button type="button" class="btn btn-primary">Login</button></a>';
            }
        ?>
        </div>
    </div>
</nav>


  <div class="success-message" style="display: none;"></div>

  <div class="amritS">
    <form class="amrit-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="amrit-title">Register For AmritSanchar</div>
        <div class="amrit-message">Gurudwara Fatehgrah Sahib</div>

        <div class="amrit-flex">
            <label>
                <input class="amrit-input" type="text" name="uname" required>
                <span>Firstname</span>
            </label>
            <label>
                <input class="amrit-input" type="text" name="lname" required>
                <span>Lastname</span>
            </label>
        </div>

        <label>
            <input class="amrit-input" type="text" name="father" required>
            <span>Father Name</span>
        </label>

        <label>
            <input class="amrit-input" type="tel" name="phone" required>
            <span>Phone Number</span>
        </label>

        <label>
            <input class="amrit-input" type="email" name="email" required>
            <span>E-mail</span>
        </label>

        <label>
            <input class="amrit-input" type="text" name="address" required>
            <span>Address</span>
        </label>

        <label>
            <input class="amrit-input" type="date" name="date" id="dateInput" required readonly>
            <span></span>
        </label>

        <button class="submit" type="submit">Register</button>
    </form>

    <div class="amsec">
        <div class="amrit-container">
            <img src="https://jotkaur-6284.github.io/page/images/khanda.png" alt="Khanda" class="khanda khanda-left">
            <img src="https://jotkaur-6284.github.io/page/images/khanda.png" alt="Khanda" class="khanda khanda-right">
            <h1>AMRITSANCHAR</h1>
            <h2>GURUDWARA SRI FATEHGARH SAHIB (2025)</h2>
            <div class="amrit-buttons">
                <button class="amrit-btn" onclick="setDate('2025-01-21')">21 January 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-02-23')">23 February 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-03-30')">30 March 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-04-29')">29 April 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-05-25')">25 May 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-06-28')">28 June 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-07-21')">21 July 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-08-30')">30 August 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-09-27')">27 September 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-10-21')">21 October 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-11-21')">21 November 2025</button>
                <button class="amrit-btn" onclick="setDate('2025-12-31')">31 December 2025</button>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
  function setDate(date) {
      document.getElementById('dateInput').value = date;
  }
</script>



</body>
</html>