<?php 

class AuthService {
  public function __construct() {
    $user = [];
  }

  public function isLoggedIn() {
    return $this->user;
  }

  public function login($username, $email, $password) {
    $user = [
      "name" => $username,
      "email" => $email,
      "password" => $password,
      "is_admin" => false
    ];
  }

  public function logout() {
    return true;
  }
}

?>