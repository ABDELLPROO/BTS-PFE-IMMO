<html>

<head>
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Home</title>
</head>
<body>
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
  
  <script src="index.js"></script>
</body>

</html>