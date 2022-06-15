<?php include('connexion.php'); 
 global $DATABASE;
 
?>

<html>
  <head>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="/assets/css/index.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Mukta:wght@300;400&family=Open+Sans:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Heebo:wght@400;500&family=Mukta:wght@300;400&family=Open+Sans:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Heebo:wght@400;500&family=Montserrat:wght@600&family=Mukta:wght@300;400&family=Open+Sans:ital,wght@0,300;1,300&family=Oswald&family=Exo:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Metrophobic&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Padauk:wght@700&display=swap" rel="stylesheet"> -->
    
    <title>Home</title>
</head>

<body class="bg-gray-100">
  <?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/about'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/sign-up'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/sign-in'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/publier'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/Accueil'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/admin'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/affAnnonce'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/profil'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/connexion'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/Admin'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <script src="/assets/js/index.js"></script>
</body>

</html>