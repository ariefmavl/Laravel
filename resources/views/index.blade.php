<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel #9 Foreign CRUD</title>
</head>
<body>


    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>


<h3>Data Pegawai</h3>
 
 <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
 
 <br/>
 <br/>

 <table border="1">
     <tr>
         <th>Nama</th>
         <th>Jabatan</th>
         <th>Umur</th>
         <th>Alamat</th>
         <th>Opsi</th>
     </tr>
     @foreach($pegawai as $p)
     <tr>
         <td>{{ $p->pegawai_nama }}</td>
         <td>{{ $p->pegawai_jabatan }}</td>
         <td>{{ $p->pegawai_umur }}</td>
         <td>{{ $p->pegawai_alamat }}</td>
         <td>
             <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
             |
             <a href="/pegawai/delete/{{ $p->pegawai_id }}">Delete</a>
         </td>
     </tr>
     @endforeach
 </table>

        <br/>
        Halaman : {{ $pegawai->currentpage() }} <br/>
        Jumlah Data : {{ $pegawai->total() }} <br/>
        Data Per Halaman : {{ $pegawai->perPage() }} <br/>


        {{ $pegawai->links() }}

</body>
</html>