<?php
  include('config/autoload.php');

  include("config/database/mysql.php");
  $db = new MysqlDatabase();
?>

<html>
  <head>
    <link rel="stylesheet" href="index.css">

    <title>Home</title>
  </head>

  <body>
    <p class="text-lg text-green-500">Hello Tailwind CSS</p>
  </body>
</html>