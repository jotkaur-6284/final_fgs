<?php

if(isset($_POST['submit'])){
    include("config.php");
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $father = mysqli_real_escape_string($con, $_POST['father']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);

    $image = NULL;
    if($_FILES['image']['size']>0){
        $folder = "daswandhImgFolder/";
        $image_name = basename($_FILES['image']['name']);
        $file = $folder.time()."_".$image_name;

        if(move_uploaded_file($_FILES['image']['tmp_name'], $file)){
            $image = $file;
        }
        else{
            echo "<script>alert('ReTry');</script>";
        }

    }

    $sql = "INSERT INTO daswandh(role, name, father, address, mail, date, phone, amount, image) VALUES('$role', '$name', '$father', '$address', '$mail', '$date', '$phone', '$amount', '$image')";

    $result = mysqli_query($con, $sql) or die("Error in query!");
    if($result){
        echo "<script>alert('Done!');</script>";
    } else {
        echo "<script>alert('Query failed');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daswandh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

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

<section class="daswandh">
    <div class="container-daswandh">
        <h2 class="text-center">Daswandh</h2>
        <div class="section-wrapper">
            <div class="form-container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="father-name" class="form-label">Father's Name</label>
                        <input type="text" class="form-control" id="father-name" name="father" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>

                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mail" name="mail" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount">
                    </div>
                    <div class="mb-3">
                        <label for="screenshot" class="form-label">Payment ScreenShot</label>
                        <input type="file" class="form-control" id="screenshot" name="image">
                    </div>
                    <input type="submit" class="btn btn-primary w-100" value="submit" name="submit">
                </form>
            </div>
            <div class="qr-container">
                <h4>Scan QR to Donate</h4>
                <img src="qr-image.jpg" alt="QR Code for Payment">
            </div>
        </div>
    </div>
</section>
</body>
</html>
