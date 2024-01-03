<!DOCTYPE html>
<html lang="en">

<head>

  <title>DigitC Learning Management System</title>
  <!-- testing commits -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- top bar-->
<div id="topbar">
  <?php include("homePage/topbar.php") ?>
</div>

<!-- header -->
<header id="header" class="fixed-top">
  <?php include("homePage/header.php") ?>
</header>

<!-- home section-->
<section id="home" class="d-flex align-items-center" style="background:url('img/bg01.jpg')top center;background-repeat:no-repeat;background-size:cover;height:90vh;">
  <div class="container">
    <h1>DIGITAL CLASSROOM</h1>
    <h2>Allows you the freedom to </br> step off the highway learning  and </br>take a more scenic route.</h2>
  </div>
</section>

<main id="main">

<!--featured service section-->
<section id="featured-section" class="featured-services">
  <?php include("homePage/service.php") ?>
</section>

<!-- About Section-->
<section id="about" class="about">
  <?php include("homePage/about.php") ?>
</section>

<!--count section-->
<section id="counts" class="counts">
  <?php include("homePage/count.php") ?>
</section>

<!--course section-->
<section id="course" class="course">
  <?php include("homePage/courses.php") ?>
</section>



<!-- Lecturers section-->
<section id="lecturer" class="lecturer">
  <?php include("homePage/lecturer.php") ?>
</section>

<!-- Contact section-->
<section id="contact" class="contact">
  <?php include("homePage/contact.php") ?>   
</section>

  <!--Footer section-->

<footer id="footer">
  <?php include("homePage/footer.php") ?>
</footer>

<!-- Preloader-->
<div class="preloader">
  <?php include("homePage/preloader.php") ?>
</div>
</main>


 <!-- Vendor JS Files -->
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="vendor/glightbox/js/glightbox.min.js"></script>
 <script src="vendor/php-email-form/validate.js"></script>
 <script src="vendor/purecounter/purecounter.js"></script>
 <script src="vendor/swiper/swiper-bundle.min.js"></script>

 <!-- Template Main JS File -->
 <script src="js/main.js"></script>

</body>

</html>    