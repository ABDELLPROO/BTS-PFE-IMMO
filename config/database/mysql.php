<?php  

Class MysqlDatabase {
  public $connection;

  function __construct() {
    $this->open_db_connection();
  }

  public function open_db_connection() {
    echo 'Database Server : ' . $_ENV['DATABASE_SERVER'] . '<br>';
    echo 'Database Name : ' . $_ENV['DATABASE_NAME'] . '<br>';
    echo 'Database Username : ' . $_ENV['DATABASE_USERNAME'] . '<br>';
    echo 'Database Password : ' . $_ENV['DATABASE_PASSWORD'] . '<br>';

    try {
      $this->connection = mysqli_connect(
        $_ENV['DATABASE_SERVER'],
        $_ENV['DATABASE_USERNAME'],
        $_ENV['DATABASE_PASSWORD'],
        $_ENV['DATABASE_NAME']
      );

      echo 'Database Connection Successful!<br>';
    } 
    catch (MYSQLI_SQL_EXCEPTION $exception) {
      echo 'Database Connection Failed!<br>';
      echo $exception->getMessage();
    }
  }
}

?>