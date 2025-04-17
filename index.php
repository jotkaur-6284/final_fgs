<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Fatehgarh Sahib</title>
  <link rel="stylesheet" href="style.css">
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
                echo '<a href="dashboard.php"><button type="button" class="btn btn-danger">Dashboard</button></a>';
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

  <div class="container">
    <div class="h image1"></div>
    <div class="h image2"></div>
    <div class="h image3"></div>
    <div class="h image4"></div>
  </div>
  <div class="cards">
    <div class="card blue">
        <p class="date" style="position: absolute; top: 0; right: 0; padding: 10px; font-size: 16px">28.02.2025</p>
      <p class="mukhwaak-heading">ਮੁੱਖਵਾਕ</p>
      <p class="tip">ਸਲੋਕੁ ਮਃ ੪ ॥</p>
        <p class="mukhwaak">ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਜੀਅ ਕੇ ਬੰਧਨਾ ਜੇਤੇ ਕਰਮ ਕਮਾਹਿ ॥
        ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਠਵਰ ਨ ਪਾਵਹੀ ਮਰਿ ਜੰਮਹਿ ਆਵਹਿ ਜਾਹਿ ॥ ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਫਿਕਾ ਬੋਲਣਾ ਨਾਮੁ ਨ ਵਸੈ ਮਨਿ ਆਇ
        ॥ ਨਾਨਕ ਬਿਨੁ ਸਤਿਗੁਰ ਸੇਵੇ ਜਮ ਪੁਰਿ ਬਧੇ ਮਾਰੀਅਹਿ ਮੁਹਿ ਕਾਲੈ ਉਠਿ ਜਾਹਿ ॥੧॥ ਮਃ ੩ ॥
        ਇਕਿ ਸਤਿਗੁਰ ਕੀ ਸੇਵਾ ਕਰਹਿ ਚਾਕਰੀ ਹਰਿ ਨਾਮੇ ਲਗੈ ਪਿਆਰੁ ॥ ਨਾਨਕ ਜਨਮੁ ਸਵਾਰਨਿ ਆਪਣਾ ਕੁਲ ਕਾ ਕਰਨਿ ਉਧਾਰੁ ॥੨॥
        ਪਉੜੀ ॥</p>
        <button type="button" class="btn btn-primary">Check Previous</button>
    </div>
  </div>

<!--head granthi-->

  <div class="wrappers">
      <figure class="car">
        <img class="image-card" src="head.png" alt=""/>
        <figcaption>
            <h2 class="head-heading">HEAD GRANTHI</h2>
          <blockquote class="head-name">
            ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ (ਫਤਿਹਗੜ੍ਹ ਸਾਹਿਬ)
          </blockquote>
          <cite
            >Giani Harpal Singh Ji, the head granthi at Gurdwara Fatehgarh Sahib,is a renowned Katha Vachak (religious discourse giver) in the Sikh community.</cite
          >
          <p class="credit">
            <strong>Caju Gomes</strong>,
            <a href="https://unsplash.com/photos/Co8AlcOhIgE" class="anchor">Unsplash</a>
          </p>
        </figcaption>
      </figure>
      <iframe class="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/1c-CDrfqgks" frameborder="0" allowfullscreen></iframe>

    </div>

  <!--RAGI SINGH-->
  <div class="container-ragi team-section">
      <p class="date" style="padding: 10px; font-size: 17px; color: #3c3c72; font-weight: 800;">28.02.2025 11:00:00pm</p>
      <button class="btn btn-primary ragies"><a href="allRagi.html" class="allragi"> All Ragi </a></button>
    <h2 class="fw-bold">RAGI SINGH</h2>
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>

    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-G5R5VSN895xc1aXUNeWpZjtp5rfwOZDanw&s" alt="Parveen Anand">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7f99vqW2jqmwIloH0gAUxZ8TCQcBzHe2gPGO9tnDAjgF595ubJM6vrccAISe1yLk7llM&usqp=CAU" alt="Diana Petersen">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 team-member">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8coFJEgDEDTd6nR8uUgUoY-2uReZHYBYo5g&s" alt="Larry Parker">
            <h4 class="fw-bold mt-3">ਗਿਆਨੀ ਹਰਪਾਲ ਸਿੰਘ</h4>
            <p class="text-muted">RAGI</p>
            <div class="social-icons">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    <?php
        if(isset($_SESSION['role'])=='admin'){
             echo ' <a href="ragiadd.html"><button class="add-ragi-btn">
                <i class="bi bi-plus"></i>
            </button></a>';
        }
    ?>

</div>
  <!-- maping -->
<div class="mploc">
  <div class="image-container">

    <img src="fgsmap.PNG" class="main-image" alt="Main Image" usemap="#image-map" />

    <!-- Hidden images that appear on hover -->
    <img src="https://www.holidify.com/images/cmsuploads/compressed/1024px-Gurdwarafatehgarhsahib_20190729162922.jpg" class="hover-image" id="hoverImage1" alt="Hover Image 1" />
    <img src="https://www.holidify.com/images/cmsuploads/compressed/3_20190327133248.jpg" class="hover-image" id="hoverImage2" alt="Hover Image 2" />
    <img src="https://i.ytimg.com/vi/OChwi7WBkeY/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGHIgOChVMA8=&rs=AOn4CLAop7Phuf1drftNZE5JZd9jC7MwUA" class="hover-image" id="hoverImage3" alt="Hover Image 3" />
    <img src="https://th.bing.com/th/id/OIP.zsGtiOx6VYkCuhh5nJzYnQAAAA?pid=ImgDet&w=192&h=143&c=7&dpr=1.2" class="hover-image" id="hoverImage4" alt="Hover Image 4" />
    <img src="https://wikiwandv2-19431.kxcdn.com/_next/image?url=https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Khanda_museum_Fatehgarh_Sahib.jpg/640px-Khanda_museum_Fatehgarh_Sahib.jpg&w=640&q=50" class="hover-image" id="hoverImage5" alt="Hover Image 5" />
    <img src="https://th.bing.com/th/id/OIP.icIfHjLvApzL2I19gYz5iQHaEN?w=291&h=180&c=7&r=0&o=5&dpr=1.2&pid=1.7" class="hover-image" id="hoverImage6" alt="Hover Image 6" />
    <img src="https://th.bing.com/th/id/OIP.iYALoDeM3pnI4h1u2O5AAQHaFP?rs=1&pid=ImgDetMain" class="hover-image" id="hoverImage7" alt="Hover Image 7" />
    <img src="https://www.discoversikhism.com/images/gurdwara/gurdwara_sri_fatehgarh_sahib/gurdwara_sri_fatehgarh_sahib12.jpg" class="hover-image" id="hoverImage8" alt="Hover Image 8" />
    <img src="https://th.bing.com/th/id/OIP.Q4sgT4rrFMUMkD8EOxOQ8gHaFj?w=253&h=190&c=7&r=0&o=5&dpr=1.2&pid=1.7" class="hover-image" id="hoverImage9" alt="Hover Image 9" />
    <div class="loc">
        <h1>Location:</h1><br>Fatehgarh  Sahib, Sirhind Morinda Road, Distt. Fatehgarh Sahib 147301<br><br>
        <b>Places near by Gurudwara Fatehgarh Sahib:</b>
        <ul><ul>
            <li>Aam  Khas Bagh </li>
            <li>Rauza Sharif</li>
            <li>Haveli Todar Mel</li>
        </ul></ul>
    </div>
</div>

<map name="image-map">
    <area target="" alt="darbar sahib" title="darbar sahib" coords="446,19,408,34,400,70,399,112,494,115,500,70,494,31,447,19" shape="poly" data-hover="hoverImage1">
    <area target="" alt="entry" title="entry" coords="487,395,490,344,490,324,465,312,419,294,381,321,356,351,351,394" shape="poly" data-hover="hoverImage2">
    <area target="" alt="thanda burj" title="thanda burj" coords="7,1,133,77" shape="rect" data-hover="hoverImage3">
    <area target="" alt="parking" title="parking" coords="144,383,200,263,269,115,200,117,138,112,90,191,14,301,13,373" shape="poly" data-hover="hoverImage4">
    <area target="" alt="khanda" title="khanda" coords="731,8,765,96,912,82,906,21" shape="poly" data-hover="hoverImage5">
    <area target="" alt="bathroom" title="bathroom" coords="524,310,587,307,595,348,529,355" shape="poly" data-hover="hoverImage6">
    <area target="" alt="srowar" title="srowar" coords="169,2,162,29,222,46,273,53,297,33,315,4" shape="poly" data-hover="hoverImage7">
    <area target="" alt="sitting area1" title="sitting area1" coords="322,113,310,132,304,159,307,168,356,173,337,258,411,279,430,124,353,111,389,115,341,112,333,113" shape="poly" data-hover="hoverImage8">
    <area target="" alt="sitting area2" title="sitting area2" coords="555,113,509,113,469,125,459,183,567,184,567,146,565,135" shape="poly" data-hover="hoverImage9">
</map>

<script>

    const hoverImages = {
        hoverImage1: document.getElementById('hoverImage1'),
        hoverImage2: document.getElementById('hoverImage2'),
        hoverImage3: document.getElementById('hoverImage3'),
        hoverImage4: document.getElementById('hoverImage4'),
        hoverImage5: document.getElementById('hoverImage5'),
        hoverImage6: document.getElementById('hoverImage6'),
        hoverImage7: document.getElementById('hoverImage7'),
        hoverImage8: document.getElementById('hoverImage8'),
        hoverImage9: document.getElementById('hoverImage9'),
    };

    const areas = document.querySelectorAll('area');

    areas.forEach(area => {
        area.addEventListener('mouseenter', () => {
            const hoverId = area.getAttribute('data-hover');
            const hoverImage = hoverImages[hoverId];

            // Get area coordinates
            const coords = area.coords.split(',').map(Number);
            const shape = area.shape;

            if (shape === 'rect') {
                hoverImage.style.left = `${coords[0]}px`;
                hoverImage.style.top = `${coords[1]}px`;
                hoverImage.style.width = `${coords[2] - coords[0]}px`;
                hoverImage.style.height = `${coords[3] - coords[1]}px`;
            } else if (shape === 'circle') {
                const x = coords[0] - coords[2]; // Adjust for circle
                const y = coords[1] - coords[2];
                hoverImage.style.left = `${x}px`;
                hoverImage.style.top = `${y}px`;
                hoverImage.style.width = `${coords[2] * 2}px`;
                hoverImage.style.height = `${coords[2] * 2}px`;
            }

            hoverImage.style.display = 'block'; // Show the hover image
        });

        area.addEventListener('mouseleave', () => {
            const hoverId = area.getAttribute('data-hover');
            const hoverImage = hoverImages[hoverId];
            hoverImage.style.display = 'none'; // Hide the hover image
        });
    });
    // navbar scroll
    document.addEventListener('DOMContentLoaded', () => {
        const navbar = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 0) {
                navbar.classList.add('scroll-active'); // Add class on scroll
            } else {
                navbar.classList.remove('scroll-active'); // Remove class
            }
        });
    });
</script>

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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Daswandh</a></li>
                    <li><a href="#">Deg</a></li>
                    <li><a href="#">Room Booking</a></li>
                    <li><a href="#">Bhetan</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-6">
                <h3 class="footer-title">Support</h3>
                <ul class="footer-links">
                    <li><a href="#">Contect us</a></li>
                    <li><a href="#">Registration</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Nitname</a></li>
                    <li><a href="#">Our Team</a></li>
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
                    <p class="mb-0">&copy; 2025 SGPC. All rights reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>