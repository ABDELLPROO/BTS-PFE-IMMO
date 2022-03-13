<?php require_once './dispatcher.php'; ?>

<html>
<head>
  <link rel="stylesheet" href="/index.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Home</title>
</head>
<body>
  <?php include 'layouts/' . $_CURRENT_ROUTE['layout'] . '.php'; ?>
  <script src="/index.js"></script>
</body>

</html>