<!DOCTYPE html>
<html>
<head>
	<title>Mugiwara</title>

</head>
<body>

	<header>

		<h1>Mugiwara</h1>
		<nav>
			<a href="/blog">HOME</a>
			|
			<a href="/blog/about">ABOUT</a>
			|
			<a href="/blog/contact">CONTACT</a>
			
			<a href="/blog/crew">CREW</a>

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
		<p>&copy; <a href>Mugiwara no Ichimi</a>. 2020 - 2021</p>
	</footer>

</body>
</html>