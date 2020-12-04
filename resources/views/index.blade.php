<!DOCTYPE html>
<html>
<head>
	<title>Crew Mugiwara</title>
</head>
<body>

	
	<h1>Data Mahasiswa</h1>

	<a href="/mahasiswa/add"> + Add New Mugiwara</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->mahasiswa_nama }}</td>
			<td>{{ $p->mahasiswa_jurusan }}</td>
			<td>{{ $p->mahasiswa_umur }}</td>
			<td>{{ $p->mahasiswa_alamat }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/delete/{{ $p->mahasiswa_id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>