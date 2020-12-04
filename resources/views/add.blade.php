<!DOCTYPE html>
<html>
<head>
	<title>Crew Mugiwara</title>
</head>
<body>

	<h1>Mugiwara ni Yokoso</h1>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa"> Back</a>
	
	<br/>
	<br/>

	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jurusan <input type="text" name="jurusan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Save Data">
	</form>

</body>
</html>