<?php 
  $_CURRENT_ROUTE = array_shift(
    array_filter(
      json_decode(file_get_contents('./router.json'), true), 
      function($route) { return $route['uri'] == $_SERVER['REQUEST_URI']; }
    )
  );
?>