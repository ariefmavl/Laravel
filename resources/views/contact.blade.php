<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Contact Page')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

	<p>Contact Page</p>
	
	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>monkeydluffy@kaizoku.com</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>0000-8888-9999-6666</td>
		</tr>
	</table>

@endsection