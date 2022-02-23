<html>

<head>
  <link rel="stylesheet" href="index.css">
  <title>Home</title>
</head>


<body>
  <?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>

  <?php if ($_SERVER['REQUEST_URI'] == '/about'): ?>
  <?php include './layouts/MainLayout.php'; ?>
  <?php endif; ?>
</body>

</html>