<main id="main">
  <?php
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'home'; // set a default page
  }

  switch($page) {
    case 'home':
      include 'pages/home.php';
      break;

    case 'aboutofex':
      include 'pages/aboutofex.php';
      break;

    case 'CaseStudy':
      include 'pages/CaseStudy.php';
      break;

      case 'CaseStudy-single-1':
        include 'pages/CaseStudy-single-1.php';
        break;

      case 'CaseStudy-single-2':
        include 'pages/CaseStudy-single-2.php';
        break;

      case 'CaseStudy-single-3':
        include 'pages/CaseStudy-single-3.php';
        break;

      case 'CaseStudy-single-4':
        include 'pages/CaseStudy-single-4.php';
        break;

      case 'CaseStudy-single-5':
        include 'pages/CaseStudy-single-5.php';
        break;

    case 'whyofex':
        include 'pages/whyofex.php';
        break;

        
  }
  ?>
  </main><!-- End #main -->