<!DOCTYPE html>
<html>
<head>
	<title>Kewirausahaan Polban</title>
</head>
<body>
 
	<header>
 
		<h2>Kewirausahaan</h2>
		<nav>
			<a href="/kw">HOME</a>
			|
			<a href="/kw/pengajuan">PENGAJUAN</a>
			|
			
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a>Hisyam Group</a>. 2018 - 2019</p>
	</footer>
 
</body>
</html>