<?php
  include("services/offers.php");

  $offersService = new OffersService();
  $newOffer = $offersService->addOffer("Test");

  echo $newOffer['status'] 
    ? 'Created : ' . json_encode($newOffer['data'])
    : 'Error :' . $newOffer['error'];
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