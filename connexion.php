<?php
  $DATABASE = new mysqli("localhost", "root", "", "pfe_immo");

  if ($DATABASE -> connect_errno) {
    echo "Failed to connect to Mysql";
  }
?>