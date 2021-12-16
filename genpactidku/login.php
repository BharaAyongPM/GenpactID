<!DOCTYPE html>
<html>
<head>
	<title>PORTAL GENSHIN IMPACT </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="images/favicon.ico" rel="shortcut icon"/>
</head>
<audio controls autoplay class="hidden" loop="true">
        <source src="ostgenshin.mp3" type="audio/mpeg">
</audio>
<body>

<!--header-->
	<header>

		<h1 class="judul">PORTAL GENSHIN IMPACT INDONESIA</h1>
		<p class="deskripsi">Tingkatkan Rank Adventure dan selesaikan misi untuk memperoleh sang Shining Idol - Barbara. Dapatkan lebih banyak Karakter dan Senjata langka di versi baru ini.</p>
	</header>
	
	<div class="wrap">
		<!-- bagian menu-->
		<nav class="menu">
			<ul>
				<li>
					<a href="login.php">Home</a>
				</li>
				<li>
					<a href="login.php">Download</a>
				</li>
				<li>
					<a href="login.php">Tier List</a>
				</li>
				<li>
					<a href="login.php">Top Up</a>
				</li>
				<li>
					<a href="login.php">tentang</a>
				</li>

			</ul>
		</nav>

		<!-- sidebar -->
		<aside class="sidebar">
			<div class="widget">
				<img src="images/logo.png" alt="">
			</div>
			<div class="widget">
				<h2>SOSIAL MEDIA</h2>
				<p><a href="https://web.facebook.com/groups/443610455773419/?hoisted_section_header_type=recently_seen&multi_permalinks=2291632497637863">FACEBOOK<a target="_blank" ></a>.</p>
				<p><a href="https://www.youtube.com/c/GenshinImpact">YOUTUBE<a target="_blank" ></a>.</p>
				<p><a href="https://www.instagram.com/genshinimpact/">INSTAGRAM<a target="_blank" ></a>.</p><p><a href="https://twitter.com/GenshinImpact">TWITER<a target="_blank" ></a>.</p>
			</div>
			<div class="widget">
				<h2>Daftar Member</h2>
				<p><a href="https://api.whatsapp.com/send?phone=6289620691733&text=Halo!%0ASaya%20mau%20daftar%20member,%20apakah%20bisa%20dibantu?">Klik di SINI<a target="_blank" ></a>.</p></div>
			<div class="widget">
				
			<a href="https://time.is/Jakarta" id="time_is_link" rel="nofollow" style="font-size:15px;color:#1591cf">Waktu Indonesia Barat:</a>
			<span id="Jakarta_z41c" style="font-size:15px;color:#1591cf"></span>
			<script src="//widget.time.is/t.js"></script>
			<script>
				time_is_widget.init({Jakarta_z41c:{}});
			</script>


			</div>
			
		</aside>
		

		<!-- isi -->
		<div class="blog">
			<div class="lanjutan">
				<img src="images/login.jpeg">
				<h1> Silahkan Login Untuk Melanjutkan</h1>
				<?php
session_start();
$username = 'member';
$password = 'member12345';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
       
        $_SESSION["username"] = $username; 

        
        header("Location: index.html"); //Pindahkan Kehalaman utama
    } else {
        // Tampilkan Pesan salah pw
        display_login_form();
        echo '<p>Username Atau Password Tidak Benar</p>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="Masuk">
    </form>    
<?php } ?>
<hr>
<p>Tidak Memiliki Akun? <br>
	<p><a href="https://api.whatsapp.com/send?phone=6289620691733&text=Halo!%0ASaya%20mau%20daftar%20member,%20apakah%20bisa%20dibantu?">Klik di SINI<a target="_blank" ></a>.</p>
</p>
			</div>
			<div class="footer">
				
      		Copyright :  Kelompok 5 Web Pro <br>
      		Universitas Bina Sarana Informatika 2021
   			</div>
			</div>


</body>
</html>