<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>OFeX Fleet & Fuel Tracking</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <?php include 'includes/gtag.php'; ?>
</head>

<body>
<?php
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'home'; // set a default page
  }

  switch($page) {
    case 'home':
      include 'includes/header.php';
      break;

    case 'CaseStudy':
      include 'includes/CaseStudyheader.php';
      break;

      case 'CaseStudy-single-1':
        include 'includes/CaseStudyheader.php';
        break;
        
      case 'CaseStudy-single-2':
        include 'includes/CaseStudyheader.php';
        break;

      case 'CaseStudy-single-3':
        include 'includes/CaseStudyheader.php';
        break;

      case 'CaseStudy-single-4':
        include 'includes/CaseStudyheader.php';
        break;

      case 'CaseStudy-single-5':
        include 'includes/CaseStudyheader.php';
        break;

    case 'whyofex':
      include 'includes/CaseStudyheader.php';
      break;

    case 'aboutofex':
      include 'includes/CaseStudyheader.php';
      break;
    
  }
  ?>
  <?php include 'pages/main.php'; ?>
  <?php include 'includes/footer.php'; ?>

  <a href class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>