<!DOCTYPE html>
<html>
<head>
	<title>Crew Mugiwara Edit</title>
</head>
<body>

	
	<h1>Edit Mahasiswa</h1>

	<a href="/mahasiswa"> Back</a>
	
	<br/>
	<br/>

	@foreach($mahasiswa as $p)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->mahasiswa_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->mahasiswa_nama }}"> <br/>
		Jurusan <input type="text" required="required" name="jurusan" value="{{ $p->mahasiswa_jurusan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->mahasiswa_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->mahasiswa_alamat }}</textarea> <br/>
		<input type="submit" value="Save Data">
	</form>
	@endforeach
		

</body>
</html>