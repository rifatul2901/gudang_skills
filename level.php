<?php
session_start();
if (!isset($_SESSION['user_id'])) {

    exit();
}

$db = mysqli_connect('localhost', 'root', '', 'gudang_skil');

if (isset($_POST['simpan'])) {
    $level = mysqli_real_escape_string($db, $_POST['level']);
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO progress (user_id, level) VALUES ('$user_id', '$level')";
    if (mysqli_query($db, $query)) {
        echo "<script>alert('Progress berhasil disimpan!'); window.location.href='video.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan progress'); window.location.href='video.php';</script>";
    }
}
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
        rel="stylesheet" />
    <!-- FONT -->
    <!-- ICON -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- ICON -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/level.css" />
    <!-- CSS -->
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
            <a href="index.php">Home</a>
            <a href="index.php#favorit">Favorit</a>
            <a href="contact.php">Contact</a>
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
    <!--HEADER END -->
    <!-- CONTENT MAIN -->
    <main>
        <!-- HEADLINE -->
        <section class="beranda"></section>
        <!-- HEADLINE  END-->
        <!-- KATEGORI 1 -->
        <section class="kategori-1" id="kategori-1">
            <div class="teks-kategori">Videography</div>
            <div class="container">
                <div class="image-box" id="videography-lvl-1" onclick="window.location.href='video.php'">
                    <p>Level 1</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <form method="POST" action="level.php">
                        <input type="hidden" name="level" value="Level 1">
                        <button type="submit" name="simpan" class="btn-save" onclick="event.stopPropagation();">
                            Simpan
                        </button>
                    </form>
                </div>
                <div class="image-box" id="videography-lvl-2">
                    <p>Level 2</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="videography-lvl-3">
                    <p>Level 3</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="videography-lvl-4">
                    <p>Level 4</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="videography-lvl-5">
                    <p>Level 5</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
            </div>
        </section>
        <!-- KATEGORI 1 END -->
        <!-- KATEGORI 2 -->
        <section class="kategori-1" id="kategori-2">
            <div class="teks-kategori">Drum</div>
            <div class="container">
                <div class="image-box" id="drum-lvl-1">
                    <p>Level 1</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="drum-lvl-2">
                    <p>Level 2</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="drum-lvl-3">
                    <p>Level 3</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="drum-lvl-4">
                    <p>Level 4</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="drum-lvl-5">
                    <p>Level 5</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
            </div>
        </section>
        <!-- KATEGORI 2 END -->
        <!-- KATEGORI 3 -->
        <section class="kategori-1" id="kategori-3">
            <div class="teks-kategori">Gitar</div>
            <div class="container">
                <div class="image-box" id="Gitar-lvl-1">
                    <p>Level 1</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="Gitar-lvl-2">
                    <p>Level 2</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="Gitar-lvl-3">
                    <p>Level 3</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="Gitar-lvl-4">
                    <p>Level 4</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="Gitar-lvl-5">
                    <p>Level 5</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
            </div>
        </section>
        <!-- KATEGORI 3 END -->
        <!-- KATEGORI 4 -->
        <section class="kategori-1" id="kategori-4">
            <div class="teks-kategori">Photography</div>
            <div class="container">
                <div class="image-box" id="photography-lvl-1">
                    <p>Level 1</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="photography-lvl-2">
                    <p>Level 2</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="photography-lvl-3">
                    <p>Level 3</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="photography-lvl-4">
                    <p>Level 4</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
                <div class="image-box" id="photography-lvl-5">
                    <p>Level 5</p>
                    <div class="image-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum mattis condimentum augue vel consequat. Pellentesque
                        tincidunt laoreet nisl. Nullam ut tincidunt augue, nec venenatis
                        lectus. Praesent faucibus ultrices faucibus. Nulla posuere ex in
                        tincidunt maximus. Nunc in orci aliquet odio sagittis porttitor.
                        Morbi et metus in est interdum hendrerit. Vestibulum convallis ac
                        ligula in efficitur.
                    </div>
                    <button class="btn-save">Simpan</button>
                </div>
            </div>
        </section>
        <!-- KATEGORI 4 END -->
    </main>
    <!-- CONTENT MAIN END-->
    <!-- FOOTER -->
    <footer>
        <div class="logo-container-footer">
            <a href="#header">
                <img src="assets/logo.png" width="50px" height="60px" alt="logo" />
                <h1>Gudang<span class="teks-skill">skill</span></h1>
            </a>
            <p>
                Copyright <span class="logo-copy"> &copy; </span>all rights reserved
            </p>
            <div class="logo-medsos">
                <a href="">
                    <i data-feather="facebook"></i>
                </a>
                <a href="">
                    <i data-feather="instagram"></i>
                </a>
            </div>
        </div>
        <div class="deskripsi">
            <div class="about">
                <p class="teks-about">About</p>
                <a href="index.php#header">Home</a>
                <a href="#favorit">Favorit</a>
            </div>
            <div class="contact">
                <p class="teks-contact">Contact Us</p>
                <p class="teks-email">gudangskill@gmail.com</p>
                <button onclick="location.href='contact.php'" class="btn-contact">
                    Contact Us
                </button>
            </div>
        </div>
    </footer>

    <!--FOOTER END  -->
    <!-- SCRIPT -->
    <script src="/js/video.js" />
</body>

</html>