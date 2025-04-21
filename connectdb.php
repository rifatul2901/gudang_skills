<?php
session_start();

// Inisialisasi variabel
$username = "";
$email = "";
$errors = array();

// Koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'gudang_skil');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // Ambil semua nilai input dari form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // Validasi form
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // Cek apakah username atau email sudah terdaftar
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  // Tambahkan ini untuk debug
  //var_dump($user);

  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Jika tidak ada error, simpan user baru
  if (count($errors) == 0) {
    $password = md5($password_1); // Enkripsi password

    $query = "INSERT INTO user (username, email, password) 
              VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    header('location: login.php');
    exit();
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $user = mysqli_fetch_assoc($results);
      $_SESSION['email'] = $user['email'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    } else {
      array_push($errors, "Wrong email/password combination");
    }
  }
}
