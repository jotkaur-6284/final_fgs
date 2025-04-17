 <?php
    include('config.php');
    date_default_timezone_set("Asia/Kolkata");
    $send = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $amount =  mysqli_real_escape_string($con, $_POST['amount']);
        $date = date("Y-m-d");
        $time = date("h:i A");


        $sql = "INSERT INTO deg(name,phone,date,time,amount) VALUES('$name','$phone','$date','$time','$amount')";
        $result = mysqli_query($con, $sql) or die("Query Failed!");

        $send = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ਦੇਗ-ਭੇਟਾ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i> <!-- Menu icon -->
        <div class="logo"><a href="#"><img src="logo.png" class="logo_image" width="70px">FGS</a></div>
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
                        <li><a href="amritReg.php">Registration</a></li>
                        <li><a href="checkcertificate.php">Certificate</a></li>
                    </ul>
                </li>
                <li><a href="bhetan.php">ਭੇਟਾ</a></li>
                <li><a href="room_book.html">Room Booking</a></li>
                <li><a href="nitnem.html">ਨਿਤਨੇਮ</a></li>
            <!-- </ul>
        </div> -->
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
        </ul>
        </div>
    </div>
</nav>


<section class="deg">
<div class="container-deg">
    <h2 class="text-center">ਦੇਗ-ਭੇਟਾ</h2>
    <?php
    if($send == true){
    ?>
    <div id="result-box" class="result-box">
            <h3><?php echo $name; ?></h3>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Date:</strong> <?php echo $date; ?></p>
            <p><strong>Time:</strong> <?php echo $time; ?></p>
            <img src="qr-image.jpg" alt="QR Code" width="50%">
            <p class="big-amount">₹<?php echo $amount; ?></p>
            <a href="deg.php" class="btn btn-success">Another Receipt</a>
        </div>

        <?php
        }
        else {
      ?>


    <form id="registration-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="tel" name="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Amount</label>
            <select name="amount" class="form-control" required>
                <option value="11">₹11</option>
                <option value="21">₹21</option>
                <option value="51">₹51</option>
                <option value="81">₹81</option>
                <option value="101">₹101</option>
                <option value="501">₹501</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">DONE</button>
    </form>
<?php
    }
?>
</div>
</section>


</body>
</html>
