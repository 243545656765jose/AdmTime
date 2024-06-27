<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/ADMPersonal/app/utils/database.php');

function authenticate($username, $password) {
  $conn = getDbConnection();
  $query = "SELECT * FROM users where username = '$username' AND password='$password'";
  $result = $conn->query($query);
  if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
    return $user;
  } else {
    return false;
  }
}
