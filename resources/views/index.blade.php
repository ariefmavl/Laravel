<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Arief Maulana GOAT</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css//app.css') }}">
    
</head>
<body>
    
    <div class="container">
        <div class="card">
            <div class="card-body">

                <h2 class="text-center"><a href="ARIEF MAULANA // ALIEV MORANA"></a></h2>

                
    <style type="text/css">
        .pagination li{
            float: left;
            list-style-type: none;
            margin:5px;
        }
    </style>


        <h3>Data Pegawai</h3>

        <p>Cari Data Pegawai :</p>

        <div>
        <form action="/pegawai/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
        <input class="btn btn-primary ml-3" type="submit" value="CARI">
    </form>

        <br/>

 <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
 
 <br/>
 <br/>

 <table class="table table-bordered">
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
             <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
             |
             <a class="btn btn-danger btn-sm" href="/pegawai/delete/{{ $p->pegawai_id }}">Delete</a>
         </td>
     </tr>
     @endforeach
 </table>

        <br/>
        Halaman : {{ $pegawai->currentpage() }} <br/>
        Jumlah Data : {{ $pegawai->total() }} <br/>
        Data Per Halaman : {{ $pegawai->perPage() }} <br/>


        {{ $pegawai->links() }}

        </div>
    </div>
</div>


</body>
</html>