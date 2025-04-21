<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gudang Skill</title>
    <link rel="icon" type="image/png" href="assets/logo.png" />
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="logo-container">
        <a href="#">
          <img src="assets/logo.png" width="50px" height="60px" alt="logo" />
          <h1>Gudang<span>skill</span></h1>
        </a>
      </div>

      <!-- NAVBAR -->
      <nav>
        <a href="#">Home</a>
        <a href="#favorit">Favorit</a>
        <a href="contact.html">Contact</a>
      </nav>
      <!-- NAVBAR END -->

      <div class="login-container">
        <?php if (isset($_SESSION['email'])): ?>
          <span style="margin-right: 10px;">
            Hi, <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : htmlspecialchars($_SESSION['email']); ?>
          </span>
          <div class="garis-vertical"></div>
          <a href="logout.php" class="btn-login">Logout</a>
        <?php else: ?>
          <a href="login.php" class="btn-login">Login</a>
          <div class="garis-vertical"></div>
          <a href="sign_up.php" class="btn-regis">Sign Up</a>
        <?php endif; ?>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- CONTENT MAIN -->
    <main>
      <!-- BERANDA-->
      <section class="beranda">
        <div class="teks-beranda">
          <h1>
            Tingkatkan Skillmu dengan <br />
            Video Tutorial Terbaik!
          </h1>
          <button onclick="location.href='#skill-home'" class="btn-jelajahi">
            Jelajahi Tutorial
          </button>
        </div>
      </section>
      <!-- BERANDA END -->

      <!-- SKILL HOME-->
      <section id="skill-home" class="skill-home">
        <div class="teks-kategori">Skill Home</div>
        <div class="container scroll-1">
          <div class="card"><div class="card__content"><a href="#"><img src="assets/kategori1.jpg" alt="" /></a></div></div>
          <div class="card"><div class="card__content"><a href="#"><img src="assets/kategori2.jpg" alt="" /></a></div></div>
          <div class="card"><div class="card__content"><a href="#"><img src="assets/kategori3.jpg" alt="" /></a></div></div>
          <div class="card"><div class="card__content"><a href="#"><img src="assets/kategori4.jpg" alt="" /></a></div></div>
        </div>
      </section>
      <!-- SKILL HOME END -->

      <!-- FAVORIT -->
      <section id="favorit" class="favorit">
        <div class="teks-favorit">Favorit</div>
        <div class="content">
          <div class="favorit-content"><img src="assets/kategori2.jpg" alt="" /></div>
          <div class="favorit-content"></div>
          <div class="favorit-content"></div>
          <div class="favorit-content"></div>
        </div>
      </section>
      <!-- FAVORIT END -->
    </main>
    <!-- CONTENT MAIN END-->

    <!-- FOOTER -->
    <footer>
      <div class="footer-content">
        <div class="footer-section about">
          <h1>Tentang Kami</h1>
          <p>Website ini menyediakan tutorial terbaik untuk meningkatkan skill Anda.</p>
          <p>&copy; 2025 Gudang Skill</p>
        </div>
        <div class="footer-section social">
          <h1>Ikuti Kami</h1>
          <div class="icon">
            <a href="#"><i data-feather="facebook"></i></a>
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER END -->

    <!-- ICON -->
    <script>feather.replace();</script>
    <!-- SCRIPT -->
    <script src="java.js"></script>
  </body>
</html>
