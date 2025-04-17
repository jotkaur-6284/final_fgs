<?php
session_start();

if (isset($_SESSION['full_name']) && isset($_SESSION['address'])) {
    $full_name = $_SESSION['full_name'];
    $address = $_SESSION['address'];
} else {
    $full_name = '______';
    $address = '______';
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
<div class="amrit-cert-container">

<a href="index.php" class="back-link"><button type="button" class="btn btn-primary">back</button></a>

<div class="amrit-certificate">
  <div class="gray-box">
    <div class="amrit-header">
      <img src="https://jotkaur-6284.github.io/page/images/khanda.png" class="amrit-logo" alt="Khanda">
      <img src="https://jotkaur-6284.github.io/page/images/khanda.png" class="amrit-logo" alt="Khanda">
    </div>

    <div class="amrit-center">
      <p class="amrit-p">ਵਾਹਿਗੁਰੂ ਜੀ ਦੀ ਫ਼ਤਿਹ</p>
      <h1 class="amrit-h1">ਗੁਰਦੁਆਰਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ</h1>
      <p class="amrit-p">ਜਿਲ੍ਹਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ(ਸ਼੍ਰੋਮਣੀ ਗੁ: ਪ੍ਰ: ਕਮੇਟੀ)</p>
      <p class="amrit-p">Phone n.625377652, 653572756 | E-mail: gurudwara@gmail.com</p>
      <h2 class="amrit-h2">GURUDWARA SRI FATEHGRAH SAHIB</h2>
      <p class="amrit-p">Distt. Fatehgarh Sahib. (S.G.P.C)</p>
    </div>

    <div class="amrit-info">
      <div>Sr num: <strong>NULJP2</strong></div>
      <div>Date: <strong>4/5/2025</strong></div>
    </div>

    <h3 class="amrit-center">ਅੰਮ੍ਰਿਤ ਸੰਚਾਰ ਦਾ ਸਰਟੀਫਿਕੇਟ</h3>

    <div class="main-text">
     ਇਹ ਸਰਟੀਫਿਕੇਟ ਇਹ ਗਵਾਹੀ ਦਿੰਦਾ ਹੈ ਕਿ ਪੁੱਤਰ/ਪੁੱਤਰੀ <?php echo $full_name; ?> ਨਿਵਾਸੀ <?php echo $address; ?> ਨੂੰ ਗੁਰੂ ਮਹਾਰਾਜ ਦੀ ਹਜ਼ੂਰੀ ਵਿੱਚ ਅੰਮ੍ਰਿਤ ਛਕਿਆ। ਇਸ ਨੂੰ ਪੰਜ ਕਕਾਰ ਦੇ ਨਾਲ ਰਹਿਣੀ-ਬਹਿਣੀ ਅਨੁਸਾਰ ਜੀਵਨ ਬਿਤਾਉਣ ਦੀ ਕਸਮ ਦਿਵਾਈ ਗਈ। ਇਹ ਸਿੰਘ/ਸਿੰਘਣੀ ਹੁਣ ਗੁਰੂ ਵਾਲਾ ਜੀਵਨ ਬਿਤਾਉਣ ਦੀ ਸਉ ਚੁੱਕੀ ਹੈ।
    </div>

    <div class="sign-area">
      ਗੁਰੂ-ਪੰਥ ਦਾ ਦਾਸ<br>
      ਦਸਤਖਤ: ___________<br>
      <small>(ਸੇਵਾ ਦਰ: ਗੁਰਦੁਆਰਾ ਸ੍ਰੀ ਫਤਹਿਗੜ੍ਹ ਸਾਹਿਬ)</small>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- footer -->
<footer class="footer pt-5">
    <div class="containerr">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-title">About Fatehgarh Sahib</h3>
                <p class="mb-4">Gurudwara Fatehgarh Sahib is a historic and spiritual center, dedicated to the teachings of Sikh Gurus.</p>
                <div class="social-links mb-4">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-6">
                <h3 class="footer-title">Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6">
                <h3 class="footer-title">Newsletter</h3>
                <p class= "mb-4">We are here to assist you with any inquiries or feedback regarding your visit to Gurudwara Shri Fatehgarh Sahib.</p>
                <form class="mb-4">
                    <div class="input-group">
                        <input type="email" class="form-control newsletter-input" placeholder="Enter your email">
                        <button class="btn btn-subscribe text-white" type="submit">Submit</button>
                    </div>
                </form>
                <p class="small"></p>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom mt-5">
        <div class="containerr">
            <div class="row py-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 Your Company. All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>