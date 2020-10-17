<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Template Blade Laravel #8</title>
</head>
<body>
    
    <header>

        <h2>Blog Aliev Morana</h2>
        <nav>
            <a href="/blog">HOME</a>

            <a href="/blog/about">ABOUT</a>

            <a href="/blog/contact">CONTACT</a>
        </nav>
    </header>
    <hr/>
    <br>
    <br>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>


    <!-- bagian konten blog --> 
    @yield('konten')

    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="Aliev Morana">Aliev Morana</a></p>
    </footer>

</body>
</html>