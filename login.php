<?php
?>

<?php include('connectdb.php') ?>

<?
// Inisialisasi array untuk error
$errors = [];

if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  // Validasi input
  if (empty($email)) {
    $errors[] = "Email harus diisi";
  }
  if (empty($password)) {
    $errors[] = "Password harus diisi";
  }

  if (count($errors) === 0) {
    $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
      $user = mysqli_fetch_assoc($result);

      // Gunakan password_verify jika sudah menggunakan password_hash
      // if (password_verify($password, $user['password'])) {

      // Untuk sementara pakai perbandingan biasa
      if ($password === $user['password']) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['success'] = "You are now logged in";
        $_SESSION['user_id'] = $user['id']; // <--- penting untuk menyimpan video berdasarkan user

        header('Location: index.php');
        exit();
      } else {
        $errors[] = "Password salah";
      }
    } else {
      $errors[] = "Email tidak ditemukan";
    }
  }
}
?>

<!-- HTML DI BAWAHNYA -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gudang Skill - Login</title>
  <link rel="icon" type="image/png" href="assets/logo.png">

  <!-- CSS -->
  <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>" />

  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- HEADER -->
  <header>
    <div class="logo-container">
      <a href="index.php">
        <img src="assets/logo.png" width="50px" height="60px" alt="logo" />
        <h1>Gudang<span>skill</span></h1>
      </a>
    </div>

    <!-- NAVBAR -->
    <nav>
      <a href="index.php">Home</a>
      <a href="#">Contact</a>
    </nav>

    <div class="login-container">
      <a href="login.php" class="btn-login">Login</a>
      <div class="garis-vertical"></div>
      <a href="sign_up.php" class="btn-regis">Sign Up</a>
    </div>
  </header>
  <!--HEADER END -->

  <div class="container-form">
    <form class="form" method="post" action="login.php">
      <p class="form-title">Sign in to your account</p>

      <!-- Pesan sukses setelah registrasi -->
      <?php if (isset($_SESSION['message'])): ?>
        <div class="success">
          <p style="color: green;"><?php echo $_SESSION['message']; ?></p>
        </div>
        <?php unset($_SESSION['message']); ?>
      <?php endif; ?>


      <div class="input-container">
        <input type="email" name="email" placeholder="Enter email" required />
        <input type="password" name="password" placeholder="Enter password" required />
      </div>

      <!-- Tampilkan error jika ada -->
      <?php if (count($errors) > 0): ?>
        <div class="error">
          <?php foreach ($errors as $error): ?>
            <p style="color:red;"><?php echo $error ?></p>
          <?php endforeach ?>
        </div>
      <?php endif ?>
      <!-- Tampilkan error jika ada end -->

      <button type="submit" name="login_user" class="submit">SIGN IN</button>

      <p class="signup-link">
        No account?
        <a href="sign_up.php">Sign up</a>
      </p>
    </form>
  </div>
</body>

</html>