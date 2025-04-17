<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
   <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
<div class="main-box">
<div class="cont">
    <div class="title">
        REGISTRATION
    </div>
<?php
if(isset($_POST['register'])){
    include 'config.php';

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $father = mysqli_real_escape_string($con, $_POST['father']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, md5($_POST['password']));
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $role = mysqli_real_escape_string($con, $_POST['role']);
    $job = mysqli_real_escape_string($con, $_POST['job']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    $image = NULL;
    if($_FILES['image']['size']>0){
        $folder = "RegImgFolder/";
        $image_name = basename($_FILES['image']['name']);
        $file = $folder.time(). "_" . $image_name;

        if(move_uploaded_file($_FILES['image']['tmp_name'],$file)){
            $image = $file;
        }

        else{
            echo "<script>alert('Error uploading image. Please try again.');</script>";
        }
    }


    $sql = "SELECT * FROM register WHERE phone = '$phone' ";
    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res) > 0){
        echo "<script>alert('Phone number is already exists!');</script>";
    } else {
        $ins = "INSERT INTO register (name, father, email, password, dob, phone, address, role, image, job, gender)
                VALUES ('$name', '$father', '$email', '$password', '$dob', '$phone', '$address', '$role', '$image', '$job', '$gender')";
        $result = mysqli_query($con, $ins);

        if ($result) {
            header("Location: log.php");
        } else {
            echo "Query Failed: " . mysqli_error($con);
        }
    }
}
?>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="form" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Name</span>
                <input type="text" name="name" placeholder="Enter Your Name" required>
            </div>
            <div class="input-box">
                <span class="details">Father's Name</span>
                <input type="text" name="father" placeholder="Enter Your Father's Name" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" placeholder="Enter Your email" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" placeholder="Enter Your Name" required>
            </div>
            <div class="input-box">
                <span class="details">D.O.B</span>
                <input type="date" name="dob" placeholder="Enter Your D.O.B" required>
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="tel" name="phone" placeholder="Enter Your Phone Number" required>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <input type="text" name="address" placeholder="Enter Your Address" required>
            </div>
            <div class="input-box">
                <span class="details">Role: </span>
                <select name="role" class="role" required id="roleSelect">
                    <option value="admin" name="role">Admin</option>
                    <option value="other" name="role">Other</option>
                </select>
            </div>

            <div class="input-box">
                <span class="details">Upload your image </span>
                 <input type="file" name="image"  required>
            </div>

            <div class="input-box">
                <span class="details">Job role</span>
                 <input type="text" name="job" >
            </div>

        </div>



        <div class="gender-details">
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="Male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="Female">
                <label for="others">Others</label>
                <input type="radio" name="gender" id="others" value="Others">
            </div>
        </div>

        <div class="button">
            <input type="submit" name="register" value="Register">
        </div>
    </form>

<div class="goToLog">
    <p>Already have an account?<a href="log.php">Login now</a></p>
</div>

</div>
</div>


</body>
</html>